@extends('layouts.master')

@section('header')
    
    <h2>Nouvelle catégorie</h2>

@stop

@section('content')
    
    {!! Form::open(['url' => '/categories']) !!}
    
    @include('partials.forms.category')
    
    {!! Form::close() !!}
@stop