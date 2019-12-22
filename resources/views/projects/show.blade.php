@extends('layout')

@section('content')
    <main role="main" class="container">
        <div class="d-inline-block">
            <h1 class="mt-5">{{ $project->title }}</h1>
        </div>
        <div class="d-inline-block align-text-bottom ml-3">
            <a name="" id="" class="btn btn-success" href="/projects" role="button">Home</a>
        </div>
        <p class="lead">{{ $project->description }}</p>
        <a name="" id="" class="btn btn-outline-primary" href="/projects/{{ $project->id }}/edit" role="button">Edit</a>
    </main>
@endsection