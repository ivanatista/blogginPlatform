@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Create Post</h1>
        </div>
        <div class="container">
            <form action="/submit" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{old('title')}}">
                    @error('title')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Description" value="{{old('description')}}"></textarea>
                    @error('title')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="sumbit" class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection