<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{

    public function create()
    {
        return ('auth.register');
    }

    public function store()
    {
        // dd(request()->all());
        $formData = request()->validate([
            'name' => 'required|max:255|min:5',
            'username' => 'required|max:255|min:5',Rule::unique('users | username'),
            'email' => 'required|email',Rule::unique('users | email'),
            'password' => ('required|max:255|min:8'),
            'password_confirmation' => ['required','same:password'],
        ]);
        
        $user = User::create($formData);

        auth()->login($user);

        return redirect('/')->with('success','Welcome'.$user->name);
    }

    public function login()
    {
        return ('auth.login');
    }
    public function post_login()
    {
        //validation
        $formData=request()->validate([
            'email'=>['required','email','max:255',Rule::exists('users', 'email')],
            'password'=>['required','min:8','max:255']
        ], [
            'email.required'=>'We need your email address.',
            'password.min'=>'Password should be more than 8 characters.'
        ]);

        // dd($formData);
        
        //if user credentials correct -> redirect home
        if (auth()->attempt($formData)) {
            return redirect('/')->with('success', 'Welcome back');
        } else {
            //if user credentials fail -> redirect back to form with error
            return redirect()->back()->withErrors([
                'email'=>'User Credentials Wrong'
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/')->with('success','Good Bye');
    }

    
}