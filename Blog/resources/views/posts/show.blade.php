
@extends('layouts.posts')

@section('title', 'Post')

@section('content')
    <div class="card mt-5">
  <div class="card-header">
    Post Info
  </div>
  <div class="card-body">
      <h5 class="card-title">{{ $post['title'] }}</h5>
      <p class="card-text">{{ $post['description'] }}</p>
      <p class="card-text">A well-known quote, contained in a blockquote element.</p>
  </div>
</div>

    <div class="card mt-5">
  <div class="card-header">
    Post Creator Info
  </div>
  <div class="card-body">
      <h5 class="card-title">Name: {{ $post->user? $post->user->name : 'NOT Found' }}</h5>
      <p class="card-text">Email: {{$post->user?   $post->user->Email  : 'NOT Found' }}</p>
      <p class="card-text">Created At: {{$post->user?  $post->user->created_at  : 'NOT Found'}}</p>
  </div>
</div>

@endsection
