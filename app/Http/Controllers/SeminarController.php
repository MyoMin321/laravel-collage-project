<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function index()
    {
        return view('seminars.index');
    }

    public function show()
    {
        return view('seminars.show');
    }
}