<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index()
    {
        $PostsFromDB = Post::all();
//        $allPosts = [
//            ['id'=>1, 'title'=> 'PHP', 'posted_by'=> 'Ahmed', 'created_at'=> '2022-1-1 10:00:00' ],
//            ['id'=>2, 'title'=> 'CPP', 'posted_by'=> 'Mohamed', 'created_at'=> '2022-1-1 10:00:00' ],
//            ['id'=>3, 'title'=> 'JavaScript', 'posted_by'=> 'Ahmed', 'created_at'=> '2022-1-1 10:00:00' ],
//        ];
//        dd($PostsFromDB);
        return view("posts.index",['posts'=> $PostsFromDB]);
    }

    function show($postId)
    {
        $PostsFromDB = Post::find($postId);

        return view("posts.show",['post'=> $PostsFromDB]);
    }

    function create()
    {
        $users = User::all();
        return view("posts.create",['users'=>$users]);
    }

    function store()
    {
        $data = request()->all();
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;
        $post = new Post();

        $post->title = $title;
        $post->description = $description;
        $post->user_id = $post_creator;

        $post->save();


        return redirect(route('posts.index')) ;
    }

    function edite($postId)
    {
        $users = User::all();
        $post = Post::find($postId);
        return view('posts.edite',['users'=>$users, 'post'=>$post]);
    }

    function update($postId)
    {
        $data = request()->all();
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;

        $post = Post::find($postId);
        $post->update([
            'title'=>$title,
            'description'=>$description,
            'user_id'=>$post_creator,

        ]);
//        dd($title,$description,$post_creator);

//        return $data;
        return redirect(route('posts.show',$postId)) ;
    }

    function destroy($postId)
    {
        $post = Post::find($postId);
        $post->delete();
        return redirect(route('posts.index')) ;
    }
}
