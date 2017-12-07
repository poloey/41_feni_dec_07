@extends('master')

@section('content')

<div class="container">
  <div class="bg-info p-5">
    <h2>Home page</h2>
    <hr>
  </div>
  @foreach ($posts as $post)
  <div class="card mt-3">
    <div class="card-body">
      <h2>{{$post->title}}</h2>
      <p>published on <span class="text-muted">{{$post->created_at}}</span> by <a href="#"> {{$post->user->name}}</a></p>
   
      <hr>
      <p>
        {{$post->content}}
      </p>
    </div>
  </div>
  @endforeach

  
</div>

@endsection