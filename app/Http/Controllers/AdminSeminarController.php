<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSeminarController extends Controller
{
    public function index()
    {
        return view('admin.seminars.index');
    }

    public function create()
    {
        return view('admin.seminars.create');
    }

    public function edit()
    {
        return view('admin.seminars.edit');    
    }
}