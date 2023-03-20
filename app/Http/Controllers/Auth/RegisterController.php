<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        dd(request()->all());
        $formData = request()->validate([
            'name' => 'required|max:255|min:5',
            'username' => 'required|max:255|min:5',
            'email' => 'required|email',
            'password' => 'required|max:255|min:8',
            'confirm-password' => 'required|same:password',
        ]);
        User::create($formData);
    }
    
    public function create()
    {
        dd('create');
    }
}