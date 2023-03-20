<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Slide;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Course $courses)
{
    return view('index',[
        'courses' => Course::latest()->get(),
        'slides' => Slide::all(),
    ]);
}

}