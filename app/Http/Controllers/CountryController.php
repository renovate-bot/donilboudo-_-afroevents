<?php

namespace AfroEvents\Http\Controllers;

use Illuminate\Http\Request;

use AfroEvents\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        return view('countries.index', compact('countries'));
    }

    public function show($id)
    {
        $country = Country::find($id);

        return view('countries.show', compact('country'));
    }
}
