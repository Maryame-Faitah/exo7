<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TagRequest;
use App\Tag;
use App\Categorie;
use App\Post;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        $categories = Categorie::all();
        $posts = Post::all();
        return view('admin.blog.post.index',compact('posts','tags','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.post.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $tag = new Tag();

        $tag->tag1 = request('tag1');
        $tag->tag2 = request('tag2');
        $tag->tag3 = request('tag3');
        $tag->tag4 = request('tag4');
        $tag->tag5 = request('tag5');
        $tag->tag6 = request('tag6');
        $tag->tag7 = request('tag7');
        $tag->tag8 = request('tag8');

        $tag->save();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);

        return view('admin.blog.post.tag.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        $tag = Tag::find($id);

        $tag->tag1 = request('tag1');
        $tag->tag2 = request('tag2');
        $tag->tag3 = request('tag3');
        $tag->tag4 = request('tag4');
        $tag->tag5 = request('tag5');
        $tag->tag6 = request('tag6');
        $tag->tag7 = request('tag7');
        $tag->tag8 = request('tag8');

        $tag->save();

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
        $tag = Tag::find($id);

        Storage::delete($tag);

        $tag->delete();

        return redirect()->back();
    }
}
