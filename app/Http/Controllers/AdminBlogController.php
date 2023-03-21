<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use Response;

class AdminBlogController extends Controller
{
    public function index(Blog $blogs)
    {
        return view('admin.blogs.index',[
            'blogs' => Blog::all()
        ]);
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store()
    {
        $formData = request()->validate([
            'title' => ['required',Rule::unique('blogs','title')],
            'body' => ['required'],
        ]);

        $formData['user_id'] = auth()->id();

        Blog::create($formData);
        
        return redirect('/admin/blogs');
    }

    public function uploadImage(Request $request)
    {
        if($request->hasfile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_'. time(). '.'.$extension;
            $request->file('upload')->move(public_path('blogs'),$fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('blogs/'.$fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>"; 
            // return responce()->json(['fileName' => $filename, 'uploaded'=>1, 'url'=>$url]);
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;

        }
    } 
    
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',[
            'blog' => $blog
        ]);
    }

    public function update(Blog $blog)
    {
        $formData = request()->validate([
            'title'=> ['required'],
            'body'=> ['required'],
        ]);

        $formData['user_id'] = auth()->id();

        $blog->update($formData);
        
        return redirect('/admin/blogs');
    }
}