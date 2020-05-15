<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Comment; 
use App\Post; 
use App\User; 

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        return view('admin.blog.comment.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment();

        // mini validation
        // $request->validate(['nom'=>'required|nom']);
        // $request->validate(['email'=>'required|email']);
        // $request->validate(['sujet'=>'required|sujet']);
        // $request->validate(['texte'=>'required|texte']);

        // $comment = new Comment();

        $comment->nom = request('nom');
        $comment->email = request('email');
        $comment->sujet = request('sujet');
        $comment->texte = request('texte');
        $comment->post_id = Post::InRandomOrder()->first()->id;
        $comment->user_id = User::InRandomOrder()->first()->id;

        $comment->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = Comment::find($id);
        return view('templates.blog-post.blog-post', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);

        Storage::delete($comment);

        $comment->delete();

        return redirect()->back();
    }
}
