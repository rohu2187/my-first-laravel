@extends('layout')

@section('content')
    <main role="main" class="container mt-5">
        <div class="d-inline-block">
            <h1 class="display-4">Create a New Project</h1>
        </div>
        <div class="d-inline-block align-text-bottom ml-3">
            <a name="" id="" class="btn btn-success" href="/projects" role="button">Home</a>
        </div>
        <form action="/projects" method="post" class="container">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="" value="{{ old('title') }}">
            </div>

            @if ($errors->has('title')) 
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('title') }}
                </div>
            @endif

            <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" id="" rows="3">{{ old('description') }}</textarea>
            </div>

            @if ($errors->has('description')) 
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('description') }}
                </div>
            @endif
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </main>
@endsection