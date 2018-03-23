@extends('layouts.master')

@section('header')
    <a href="{{ url('/organizers') }}">Back to overview</a>
    <h2>
        {{ $organizer->name }} 
    </h2>
    <h4></h4>
        {{ $organizer->description }} 
    </h4>
    <br><br>
    <a href="{{ url('organizers/'.$organizer->id.'/edit') }}">
        <span class="glyphicon glyphicon-edit"></span> 
        Edit
    </a>
    <a href="{{ url('organizers/'.$organizer->id.'/delete') }}">
        <span class="glyphicon glyphicon-trash"></span>
        Delete
    </a>
    {{--  <p>Last edited: {{ $category->updated_at->diffForHumans() }}</p>  --}}
@stop