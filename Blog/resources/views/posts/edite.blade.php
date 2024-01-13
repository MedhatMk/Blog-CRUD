@extends('layouts.posts')

@section('title', 'Post')

@section('content')


 <form method="POST" action="{{ route('posts.update', $post->id) }}">
     @csrf
     @method("PUT")
  <fieldset >
    <legend>Edite Post</legend>
    <div class="mb-3">
      <label class="form-label">Post Title</label>
      <input name='title' value="{{$post->title}}" type="text" class="form-control" placeholder="Post Title">
    </div>

    <div class="mb-3">
      <label class="form-label">Post Description</label>
    <textarea name="description" class="form-control"  rows="3">{{$post->description}}</textarea>
    </div>

      <div class="mb-3">
      <label class="form-label">Created By</label>
      <select name="post_creator" class="form-select">
        @foreach($users as $user)
              <option @if($user->id == $post->user->id) selected @endif value="{{$user->id}}">{{$user->name}}</option>
        @endforeach

      </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </fieldset>
</form>
@endsection
