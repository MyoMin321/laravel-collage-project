<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    protected $guarded = [];

    public function index()
    {
        return view('events.index');
    }

    public function show(Event $event)
{
    // Decode the event name
    $eventName = urldecode($event->name);
    
    // Retrieve the event from the database
    $event = Event::where('name', $eventName)->firstOrFail();
    
    // Separate date and time values
    $dateParts = explode('-', $event->date);
    $timeParts = explode(':', $event->time);
    $day = $dateParts[2];
    $month = date('M', mktime(0, 0, 0, $dateParts[1], 1));
    $year = $dateParts[0];
    $hour = $timeParts[0];
    $minute = $timeParts[1];

    return view('events.show',[
        'event' => $event,
        'day' => $day,
        'month' => $month,
        'year' => $year,
        'hour' => $hour,
        'minute' => $minute,
    ]);
}

    public function details()
    {
        return view('events.event-details');
    }

}