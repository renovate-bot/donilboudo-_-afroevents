@extends('layouts.master')

@section('header')
    
    <h2>Nouveau organisateur</h2>

@stop

@section('content')
    
    {!! Form::open(['url' => '/organizers']) !!}
    
    @include('partials.forms.organizer')
    
    {!! Form::close() !!}
@stop