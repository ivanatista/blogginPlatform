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
            <div class="card">
                <div class="card-header">Your Post</div>

                <div class="card-body">
                    @if(is_null($authorsPosts))
                    <p class="card-text">You don't have post to be shown</p>
                    @else
                        <div>
                            <ul>
                                @foreach ($authorsPosts as $post) 
                                    <li>{{ $post->title }} - {{ $post->created_at }}</li> 
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                </div>
            </div>
            <div class="row justify-content-center">
                <a class="btn btn-primary btn-lg" href="/submit" role="button">
                    Create new Post
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
