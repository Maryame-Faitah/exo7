<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Serviceslist;
use App\Post;
use App\Membre;
use App\Message;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $serviceslists = Serviceslist::all();
        $posts = Post::all();
        $membres = Membre::all();
        $messages = Message::all();
        return view('admin.index',compact('serviceslists','posts','membres','messages'));
        //return view('admin');
    }
}
