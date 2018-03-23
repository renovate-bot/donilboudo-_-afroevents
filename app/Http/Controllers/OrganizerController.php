<?php

namespace AfroEvents\Http\Controllers;

use Illuminate\Http\Request;

use AfroEvents\Organizer;

class OrganizerController extends Controller
{
    public function index()
    {
        $organizers = Organizer::all();
        return view('organizers.index')->with('organizers', $organizers);
    }

    public function create()
    {
        return view('organizers.create');
    }

    public function store(Request $request)
    {
        $organizer = Organizer::create($request->all());
        
        return redirect('organizers')->withSuccess('Organizer has been created.');
    }

    public function show($id)
    {
        $organizer = Organizer::find($id);
        
        return view('organizers.show')->with('organizer', $organizer);
    }

    public function edit($id)
    {
        $organizer = Organizer::find($id);
        return view('organizers.edit')->with('organizer', $organizer);
    }

    public function update(Request $request)
    {
        $organizer = Organizer::find($request->id);
        $organizer->name = $request->name;
        $organizer->description = $request->description;
        $organizer->facebookLink = $request->facebookLink;
        
        $organizer->save();

        return redirect('organizers')->withSuccess('Organizer has been updated.');
    }

    public function destroy(Request $request)
    {
        $organizer = Organizer::find($request->id);
        $organizer->delete();
        
        return redirect('organizers')->withSuccess('Organizer has been deleted.');
    }
}
