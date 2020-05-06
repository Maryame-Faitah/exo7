<?php

use Illuminate\Support\Facades\Route;
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
    $contacts = Contact::all();
    $messages = Message::all();
    $footers = Footer::all();
    return view('index',compact('contacts','footers','messages'));
});

//////////////////////////////////////////// AUTRES PAGES ////////////////////////////////////////////////////////
Route::get('/services',function(){
    $contacts = Contact::all();
    $messages = Message::all();
    $footers = Footer::all();
    return view('index-services',compact('contacts','footers','messages'));
});
Route::get('/blog',function(){
    $footers = Footer::all();
    return view('index-blog',compact('footers'));
});
Route::get('/blog-post',function(){
    $footers = Footer::all();
    return view('index-blog-post',compact('footers'));
});
Route::get('/contact',function(){
    $contacts = Contact::all();
    $messages = Message::all();
    $footers = Footer::all();
    return view('index-contact',compact('contacts','footers','messages'));
});
//////////////////////////////////////////// ADMINLTE PAGE ////////////////////////////////////////////////////////
Route::get('/admin',function(){
    $messages = Message::all();
    return view('admin.index',compact('messages'));
});
// main page -> contact
Route::resource('/admin/main/contact','ContactController');
Route::resource('/admin/message','MessageController');
// footer
Route::resource('/admin/footer','FooterController');

//////////////////////////////////////////// AUTHENTIFICATION //////////////////////////////////////////////////////
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
