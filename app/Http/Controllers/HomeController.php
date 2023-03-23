<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Slide;
use App\Models\Event;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    return view('index',[
        'courses' => Course::latest()->get(),
        'slides' => Slide::all(),
        'events' => Event::latest()->get(),
    ]);
}

public function show()
{
    return view('auth.verify');
}

}