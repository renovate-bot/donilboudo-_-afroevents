<?php

namespace AfroEvents\Http\Controllers;

use Illuminate\Http\Request;

use AfroEvents\Event;

class EventController extends Controller
{
    //get all 
    public function index()
    {
        $events = Event::all();

        return view('events.index');
        //return view('cities.index', compact('cities'));
    }

    public function show($id)
    {
        $event = Event::find($id);

        return view('events.show', compact('event'));
    }
}
