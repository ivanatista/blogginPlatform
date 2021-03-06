@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <ul>
                            @foreach ($posts as $post) 
                                <li>{{ $post->title }} - {{ $post->created_at }}</li> 
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <a class="btn btn-primary btn-lg" href="/submit" role="button">
                    Create new Post
                </a>
            </div>
            <div class="row justify-content-center">
                <a class="btn btn-primary btn-lg" href="/submit" role="button">
                    Admin Portal
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
