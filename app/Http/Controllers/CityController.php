<?php

namespace AfroEvents\Http\Controllers;

use Illuminate\Http\Request;

use AfroEvents\City;

class CityController extends Controller
{
    public function index()
    {
        //$cities = City::all();

        return view('cities.index');
        //return view('cities.index', compact('cities'));
    }

    public function show($id)
    {
        $city = City::find($id);

        return view('cities.show', compact('city'));
    }
}
