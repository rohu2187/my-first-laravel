@extends('layout')

@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-left">
        
        @if ( session('message') )
            <div class="alert alert-success" role="alert">
                <h3>{{ session('message') }}</h3>
            </div>
        @endif

        <div class="d-inline-block">
            <h1 class="display-4">{{ $projectTitle }}</h1>
        </div>
        <div class="d-inline-block align-text-bottom ml-3">
            <a name="" id="" class="btn btn-primary" href="/projects/create" role="button">Create</a>
        </div>

        <ol class="list-styled">
        @foreach($projects as $project)
            <h3><li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li></h3>
        @endforeach
        </ol>
    </div>
@endsection