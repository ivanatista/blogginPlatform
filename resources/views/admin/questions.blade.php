@extends('layouts.admin.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
      <div class="col-12 mt-5">
          <div class="card">
              <div class="card-body">
                  <h4 class="header-title">Preguntas Test {{$id}}</h4>
                  <div class="list-group">
                    @foreach($questions as $question)
                      <a href="/reports/{{$question->code}}/{{$id}}" class="list-group-item list-group-item-action">{{$question->description}}</a>
                    @endforeach
                  </div>
              </div>
          </div>
    </div>
</div>
@endsection
