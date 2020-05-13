<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CategorieRequest;
use App\Categorie;
use App\Post;
use App\Tag;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        $posts = Post::all();
        $tags = Tag::all();
        return view('admin.blog.post.index',compact('posts','tags','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.post.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieRequest $request)
    {
        $categorie = new Categorie();

        $categorie->categorie1 = request('categorie1');
        $categorie->categorie2 = request('categorie2');
        $categorie->categorie3 = request('categorie3');
        $categorie->categorie4 = request('categorie4');
        $categorie->categorie5 = request('categorie5');
        $categorie->categorie6 = request('categorie6');

        $categorie->save();

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
        $categorie = Categorie::find($id);

        return view('admin.blog.post.categorie.edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieRequest $request, $id)
    {
        $categorie = Categorie::find($id);

        $categorie->categorie1 = request('categorie1');
        $categorie->categorie2 = request('categorie2');
        $categorie->categorie3 = request('categorie3');
        $categorie->categorie4 = request('categorie4');
        $categorie->categorie5 = request('categorie5');
        $categorie->categorie6 = request('categorie6');

        $categorie->save();

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
        $categorie = Categorie::find($id);

        Storage::delete($categorie);

        $categorie->delete();

        return redirect()->back();
    }
}
