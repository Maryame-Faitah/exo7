<?php

use Illuminate\Support\Facades\Route;
use App\Hero;
use App\Slogan;
use App\Menu;
use App\Ready;
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
Route::get('/', function () {
    $heros = Hero::all();
    $slogans = Slogan::all();
    $menus = Menu::all();
    $readys = Ready::all();
    $contacts = Contact::all();
    $messages = Message::all();
    $footers = Footer::all();
    return view('index',compact('heros','slogans','menus','readys','contacts','messages','footers'));
});

//////////////////////////////////////////// AUTRES PAGES ////////////////////////////////////////////////////////
Route::get('/services',function(){
    $menus = Menu::all();
    $contacts = Contact::all();
    $messages = Message::all();
    $footers = Footer::all();
    return view('index-services',compact('menus','contacts','messages','footers'));
});
Route::get('/blog',function(){
    $menus = Menu::all();
    $footers = Footer::all();
    return view('index-blog',compact('menus','footers'));
});
Route::get('/blog-post',function(){
    $menus = Menu::all();
    $footers = Footer::all();
    return view('index-blog-post',compact('menus','footers'));
});
Route::get('/contact',function(){
    $menus = Menu::all();
    $contacts = Contact::all();
    $messages = Message::all();
    $footers = Footer::all();
    return view('index-contact',compact('menus','contacts','messages','footers'));
});
//////////////////////////////////////////// ADMINLTE PAGE ////////////////////////////////////////////////////////
Route::get('/admin',function(){
    $messages = Message::all();
    return view('admin.index',compact('messages'));
});
// menu
Route::resource('/admin/menu','MenuController');
// main page -> hero
Route::resource('/admin/main/hero','HeroController');
Route::resource('/admin/main/hero/slogan','SloganController');
// main page -> contact
Route::resource('/admin/main/contact','ContactController');
Route::resource('/admin/message','MessageController');
// main page -> ready?
Route::resource('/admin/main/ready','ReadyController');
// footer
Route::resource('/admin/footer','FooterController');

//////////////////////////////////////////// AUTHENTIFICATION //////////////////////////////////////////////////////
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
