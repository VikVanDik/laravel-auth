@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>{{$project->name}}</h1>
    <span class="text-danger fs-6">Creato il: {{$project->creation}}</span>

    <div class="d-flex mt-5">
        <p class="me-5"><b>Creato in:</b> {{$project->technology}}</p>
        <p><b>Progetto di tipo:</b> {{$project->type}}</p>
    </div>

    <p>{{$project->description}}</p>
    <p>Clicca qui per vederlo su Github: <a href="{{$project->url}}">{{$project->url}}</a></p>

</div>

@endsection
