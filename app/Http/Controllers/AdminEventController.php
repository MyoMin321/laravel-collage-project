<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Models\Event;

use Illuminate\Http\Request;

class AdminEventController extends Controller
{

    public function index(Event $events)
    {
        return view('admin.events.index',[
            'events' => Event::all()
        ]);
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store()
{
    // dd(request()->all());
    $formData = request()->validate([
        'name' => ['required',Rule::unique('events','name')],
        'description' => ['required'],
        'time' => ['required'],
        'date' => ['required'],
        'city' => ['required'],
        'country' => ['required'],
        'image' => ['required', 'image'], // add validation rule for image
    ]);

    if (request()->hasFile('image')) {
        $formData['image'] = request()->file('image')->store('events');
    }
    
    $formData['user_id'] = auth()->id();

    Event::create($formData);
    
    return redirect('/admin/events');
}

}