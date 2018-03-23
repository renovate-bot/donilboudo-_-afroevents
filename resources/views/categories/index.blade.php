@extends('layouts.master')

@section('header')
    <h2>Catégories</h2>
   
    <h4>
        <a href="{{ url('categories/create') }}" class="btn btn-primary pull-right">
            Nouvelle categorie
        </a>
    </h4>
@stop

@section('content')
    @foreach ($categories as $category)
        <div class="category">
            <a href="{{ url('categories/'.$category->id) }}">
                <strong>{{ $category->name }}</strong>
            </a>
        </div>
    @endforeach
@stop