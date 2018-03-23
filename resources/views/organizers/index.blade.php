@extends('layouts.master')

@section('header')
    <h2>Organisateurs</h2>
   
    <h4>
        <a href="{{ url('organizers/create') }}" class="btn btn-primary pull-right">
            Nouveau organisateur
        </a>
    </h4>
@stop

@section('content')
    @foreach ($organizers as $organizer)
        <div class="organizer">
            <a href="{{ url('organizers/'.$organizer->id) }}">
                <strong>{{ $organizer->name }}</strong>
            </a>
        </div>
    @endforeach
@stop