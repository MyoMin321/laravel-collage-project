<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    protected $guarded = [];

    public function index(Course $courses)
    {
        return view('courses.index', [
            'courses' => Course::latest()->get()
        ]);
    }

    // public function show(Course $course)
    // {
    //     return view('courses.show', [
    //         'course' => $course
    //     ]);
    // }

    public function show(Course $course)
    {
        return view("courses.show",[
            'course' => $course
        ]);
    }

}

?>