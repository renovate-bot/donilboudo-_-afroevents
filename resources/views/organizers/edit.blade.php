@extends('layouts.master')

@section('header')
    
    <h2>Modifier un organisateur</h2>

@stop

@section('content')
    
    {!! Form::model($organizer, array('url' => '/organizers/'.$organizer->id, 'method' => 'put')) !!}
    
    @include('partials.forms.organizer')
    
    {!! Form::close() !!}
@stop