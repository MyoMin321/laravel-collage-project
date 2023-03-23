<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Admissions;
use Illuminate\Validation\Rule;

class AdmissionsController extends Controller
{
    public function create(Course $courses)
    {
        return view('admissions.create',[
            'courses' => Course::all(),
        ]);    
    }

    public function store()
{
    // dd(request()->all());
    $formData = request()->validate([
        'name' => ['required'],
        'email' => ['required','email',Rule::unique('admissions','email')],
        'phone' => ['required'],
        'country' => ['required'],
        'city' => ['required'],
        'zipcode' => ['required'],
        'education' => ['required'],
        'course_id' => ['required',Rule::exists('courses','id')],
    ]);

    $admissions = Admissions::create($formData);

    if ($admissions) {
        $admissions->sendEmailVerificationNotification();
    }

    return redirect('/');
}

}