@extends('layouts.master')

@section('header')
    <a href="{{ url('/categories') }}">Back to overview</a>
    <h2>
        {{ $category->name }} 
    </h2>
    <h4></h4>
        {{ $category->description }} 
    </h4>
    <br><br>
    <a href="{{ url('categories/'.$category->id.'/edit') }}">
        <span class="glyphicon glyphicon-edit"></span> 
        Edit
    </a>
    <a href="{{ url('categories/'.$category->id.'/delete') }}">
        <span class="glyphicon glyphicon-trash"></span>
        Delete
    </a>
    {{--  <p>Last edited: {{ $category->updated_at->diffForHumans() }}</p>  --}}
@stop