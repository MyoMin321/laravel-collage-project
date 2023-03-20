<?php

namespace App\Http\Controllers;
use App\Models\Team;
use App\Models\Department;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    public function index(Team $teams){
        return view('admin.teams.index',[
            'teams' => Team::all()
        ]);
    }

    public function create()
    {
        return view('admin.teams.create',[
            'departments' => Department::all()
        ]);
    }
    
    public function store()
    {
        $formData = request()->validate([
            'name' => ['required'],
            'position' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'address' => ['required'],
            'social_link' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'education' => ['required'],
            'experience' => ['required'],
            'carrier' => ['required'],
            'role' => ['required'],
            'department_id' => ['required',Rule::exists('departments','id')],
        ]);

        $formData['profile'] = request()->file('profile')->store('team_profile');
        $formData['user_id'] = auth()->id();

        Team::create($formData);
        
        return redirect('/admin/teams');
    }
}