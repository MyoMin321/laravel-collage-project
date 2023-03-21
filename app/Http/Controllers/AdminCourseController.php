<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Validation\Rule;

class AdminCourseController extends Controller
{
    public function index(Course $courses)
    {
        return view('admin.courses.index', [
            'courses' => Course::all()
        ]);
    }

    public function create()
    {
        return view('admin.courses.create',[
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        // dd(request()->all());
        $formData = request()->validate([
            "title" => ["required"],
            "slug" => ["required",Rule::unique('courses','slug')],
            "body" => ["required"],
            "requirements" => ["required"],
            "fees" => ["required"],
            "apply" => ["required"],
            "contact_person" => ["required"],
            "contact_phone" => ["required"],
            "category_id" =>  ["required", Rule::exists('categories', 'id')]
        ]);
        
        $formData['user_id'] = auth()->id();

        $formData['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        
        $course = Course::create($formData);

        return redirect('/admin/courses');
    }

    public function edit(Course $course)
    {
        return view('admin.courses.edit', [
            'course' => $course,
        ]);
    }

    public function update(Course $course)
    {
        $formData = request()->validate([
            "title" => ["required"],
            "slug" => ["required",Rule::unique('courses','slug')->ignore($course->id)],
            "body" => ["required"],
            "contact_person" => ["required"],
            "contact_phone" => ["required"],
        ]);
        
        $formData['user_id'] = auth()->id();

        $formData['thumbnail'] = request()->file('thumbnail') ? 
            request()->file('thumbnail')->store('thumbnails') : $course->thumbnail;
        
        $course->update($formData);

        return redirect('/admin/courses/');
    }
}