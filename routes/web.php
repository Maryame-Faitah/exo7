<?php

use Illuminate\Support\Facades\Route;
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
use App\Tag;
use App\Categorie;
use App\Team;
use App\Membre;
use App\Ready;
use App\Newsletter;
use App\Contact;
use App\Message;
use App\Footer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/////////////////////////////////////////////// INDEX //////////////////////////////////////////////////////////
// Route::get('/', function () {
//     $menus = Menu::all();
//     $heros = Hero::all();
//     $slogans = Slogan::all();
//     $videos = Video::all();
//     $abouts = About::all();
//     $testimonials = Testimonial::all();
//     $temoins = Temoin::all();
//     $services = Service::all();
//     $serviceslists = Serviceslist::all();
//     $features = Feature::all();
//     $teams = Team::all();
//     $membres = Membre::all();
//     $readys = Ready::all();
//     $contacts = Contact::all();
//     $messages = Message::all();
//     $footers = Footer::all();
//     return view('index',compact('menus','heros','slogans','videos','abouts','testimonials','temoins',
//     'services','serviceslists','features','teams','membres','readys','contacts','messages','footers'));
// });
Route::resource('/','MainController');

//////////////////////////////////////////// AUTRES PAGES ////////////////////////////////////////////////////////
// Route::get('/services',function(){
//     $menus = Menu::all();
//     $services = Service::all();
//     $serviceslists = Serviceslist::all();
//     $features = Feature::all();
//     $contacts = Contact::all();
//     $messages = Message::all();
//     $footers = Footer::all();
//     return view('index-services',compact('menus','services','serviceslists','features',
//     'contacts','messages','footers'));
// });
Route::resource('/services','ServicepageController');

Route::get('/blog',function(){
    $menus = Menu::all();

    $posts = Post::all();
    $tags = Tag::all();
    $categories = Categorie::all();

    $footers = Footer::all();
    return view('index-blog',compact('menus','posts','tags','categories','footers'));
});
Route::get('/blog-post',function(){
    $menus = Menu::all();

    $posts = Post::all();
    $tags = Tag::all();
    $categories = Categorie::all();

    $newsletters = Newsletter::all();

    $footers = Footer::all();
    return view('index-blog-post',compact('menus','posts','tags','categories','newsletters','footers'));
});
Route::get('/contact',function(){
    $menus = Menu::all();
    $contacts = Contact::all();
    $newsletters = Newsletter::all();
    $messages = Message::all();
    $footers = Footer::all();
    return view('index-contact',compact('menus','contacts','messages','newsletters','footers'));
});
//////////////////////////////////////////// ADMINLTE PAGE ////////////////////////////////////////////////////////
Route::get('/admin',function(){
    $serviceslists = Serviceslist::all();
    $posts = Post::all();
    $membres = Membre::all();
    $messages = Message::all();
    return view('admin.index',compact('serviceslists','posts','membres','messages'));
});
// menu
Route::resource('/admin/menu','MenuController');
// main page -> hero
Route::resource('/admin/main/hero','HeroController');
Route::resource('/admin/main/hero/slogan','SloganController');
// main page -> video
Route::resource('/admin/main/video','VideoController');
// main page -> about
Route::resource('/admin/main/about','AboutController');
// main page -> testimonials
Route::resource('/admin/main/testimonials','TestimonialController');
Route::resource('/admin/main/testimonials/temoins','TemoinController');

// main page -> team
Route::resource('/admin/main/team','TeamController');
Route::resource('/admin/main/team/membres','MembreController');
// main page -> ready?
Route::resource('/admin/main/ready','ReadyController');
// main page -> contact
Route::resource('/admin/main/contact','ContactController');
Route::resource('/admin/message','MessageController');
// services page -> services
Route::resource('/admin/services/servicescard','ServiceController');
Route::resource('/admin/services/servicescard/serviceslist','ServiceslistController');
// services page -> services primés
Route::resource('/admin/services/features','FeatureController');
// services page -> newsletter
Route::resource('/admin/newsletter','NewsletterController');
// blog page -> articles
Route::resource('/admin/blog/post','PostController');
Route::resource('/admin/blog/post/tag','TagController');
Route::resource('/admin/blog/post/categorie','CategorieController');
// footer
Route::resource('/admin/footer','FooterController');

//////////////////////////////////////////// AUTHENTIFICATION //////////////////////////////////////////////////////
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
