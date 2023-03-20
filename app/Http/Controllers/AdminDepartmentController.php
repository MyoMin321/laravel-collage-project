<?php

namespace App\Http\Controllers;
use App\Models\Department;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminDepartmentController extends Controller
{
    public function index(Department $departments)
    {
        return view('admin.departments.index',[
            'departments' => Department::all(),
        ]);
    }

    public function create()
    {
        return view('admin.departments.create');
    }

    public function store()
    {
        $formData = request()->validate([
            "name" => ['required',Rule::unique('departments','name')],
            "description" => ['required'],
        ]);

        Department::create($formData);

        return redirect('/admin/departments/');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return back();
    }
}