<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;
use App\Categorie;
use App\User;
use App\Comment;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('admin.blog.post.index',compact('posts','tags','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('admin.blog.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();

        $post->titre = request('titre');
        $post->date = request('date');
        $post->img = request('img')->store('img');
        $post->texte = request('texte');
        $post->categorie_id = request('categorie_id');
        $post->user_id = User::InRandomOrder()->first()->id;

        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $posts = Post::find($id);
        // return view('templates.blog-post.blog-post', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Categorie::all();
        return view('admin.blog.post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);

        if(request('img') !== null){
            Storage::delete($post->img);
            $post->img = request('img')->store('img');
        }
        $post->titre = request('titre');
        $post->date = request('date');
        $post->texte = request('texte');
        $post->categorie_id = request('categorie_id');
        $post->user_id = User::InRandomOrder()->first()->id;

        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        Storage::delete($post);

        $post->delete();

        return redirect()->back();
    }
}
