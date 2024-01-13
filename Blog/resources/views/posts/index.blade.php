
@extends('layouts.posts')

@section('title', 'Post')

@section('content')
   <div class="mt-5">
      <div class="text-center">
          <a href="{{ route('posts.create') }}" type="button" class="btn btn-success">Creat Post</a>
      </div>
  </div>

  <div class="text-center mt-5">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Postded by</th>
      <th scope="col">Created At</th>
        <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
          <tr>
      <td>{{ $post->id }}</td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->user? $post->user->name : 'NoN' }}</td>
      <td>{{ $post->created_at }}</td>

            <td>
          <a href="{{ route('posts.show', $post->id )}}" class="btn btn-primary">View</a>
          <a  href="{{ route('posts.edite', $post->id )}}" class="btn btn-info">Edit</a>
           <form style="display:inline" method="POST" action="{{route('posts.destroy',$post['id'])}}">
               @csrf
               @method("DELETE")
               <button type="submit" class="btn btn-danger">Delete</button>
           </form>

      </td>
    </tr>
  @endforeach
  </tbody>
</table>
  </div>
@endsection

