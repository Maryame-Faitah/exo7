<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Pagination\Paginator;
use App\Hero;
use App\Slogan;
use App\Menu;
use App\About;
use App\Video;
use App\Testimonial;
use App\Temoin;
use App\Service;
use App\Serviceslist;
use App\Feature;
use App\Post;
use App\Categorie;
use App\Tag;
use App\Team;
use App\Membre;
use App\Ready;
use App\Newsletter;
use App\Contact;
use App\Message;
use App\Footer;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        $heros = Hero::all();
        $slogans = Slogan::all();
        $videos = Video::all();
        $abouts = About::all();
        $testimonials = Testimonial::all();
        
        $temoins = Temoin::orderBy('id','desc')->take(6)->get();

        $services = Service::all();

        $serviceslists = Serviceslist::orderBy('id','desc')->paginate(9);

        $servicesrapides = Serviceslist::all();

        $servicesprimes = Serviceslist::all();
        $servicesprimeslefts = Serviceslist::all();
        $servicesprimesrights = Serviceslist::all();

        $features = Feature::all();
        $teams = Team::all();

        $membres = Membre::orderBy('id','desc')->take(3)->get();
        $centers = $membres->where('position','Center');
        $center = $centers->random(1);
        $sides = $membres->where('position','Side');
        $side = $sides->random(2);

        $posts = Post::all();
        $categories = Categorie::all();
        $tags = Tag::all();

        $readys = Ready::all();

        $newsletters = Newsletter::all();

        $contacts = Contact::all();
        $messages = Message::all();
        $footers = Footer::all();
        return view('index',compact('menus','heros','slogans','videos','abouts','testimonials','temoins',
        'services','serviceslists','servicesprimes','servicesprimeslefts','servicesprimesrights', 'servicesrapides',
        'features','teams','membres','center','centers','side','sides',
        'posts','categories','tags','readys',
        'newsletters','contacts','messages','footers'));
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
        //
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
        //
    }
}
