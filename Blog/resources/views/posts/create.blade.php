@extends('layouts.posts')

@section('title', 'Post')

@section('content')


 <form method="POST" action="{{ route('posts.store') }}">
     @csrf
  <fieldset >
    <legend>Create Post</legend>
    <div class="mb-3">
      <label class="form-label">Post Title</label>
      <input name='title' type="text" class="form-control" placeholder="Post Title">
    </div>

    <div class="mb-3">
      <label class="form-label">Post Description</label>
    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

      <div class="mb-3">
      <label class="form-label">Created By</label>
      <select name="post_creator" class="form-select">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach

      </select>
    </div>

    <button type="submit" class="btn btn-success">Create</button>
  </fieldset>
</form>
@endsection
