<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index(Category $categories)
    {
        return view('/admin.categories.index',[
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('/admin.categories.create');
    }

    public function store()
    {
        $formData = request()->validate([
            'name' => ['required',Rule::unique('categories','name')],
            'description' => ['required'],
        ]);

        Category::create($formData);

        return redirect('admin/categories');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit',[
            'category' => $category,
        ]);
    }

    public function update(Category $category)
    {
        // dd(request()->all());
        $formData = request()->validate([
            "name" => ["required",Rule::unique('categories','name')->ignore($category->id)],
            "description" => ["required"],
        ]);
        
        $category->update($formData);

        return redirect('/admin/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}