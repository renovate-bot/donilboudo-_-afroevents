@extends('layouts.master')

@section('header')
    
    <h2>Modifier une categorie</h2>

@stop

@section('content')
    
    {!! Form::model($category, array('url' => '/categories/'.$category->id, 'method' => 'put')) !!}
    
    @include('partials.forms.category')
    
    {!! Form::close() !!}
@stop