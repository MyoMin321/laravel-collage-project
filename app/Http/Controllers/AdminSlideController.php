<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Slide;
use Illuminate\Validation\Rule;

class AdminSlideController extends Controller
{
    public function index(Slide $slides)
    {
        return view('admin.slides.index',[
            'slides' => Slide::all()
        ]);
    }

    public function create()
    {
        return view('admin.slides.create',[
            'status' => Status::all()
        ]);
    }

    public function store()
    {
        // dd(request()->all());
        $formData = request()->validate([
            "title" => ["required",Rule::unique('slides','title')],
            "description" => ["required"],
            "link1" => ["required"],
            "link2" => ["required"],
            "status_id" =>  ["required", Rule::exists('statuses', 'id')]
        ]);
        $formData['user_id'] = auth()->id();
        
        $formData['image'] = request()->file('image')->store('slides');
        
        $course = Slide::create($formData);

        return redirect('/admin/slides');
    }

    public function edit()
    {
        return view('admin.slides.edit');
    }

}