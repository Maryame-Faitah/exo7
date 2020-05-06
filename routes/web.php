<?php

use Illuminate\Support\Facades\Route;
use App\Contact;

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

// INDEX
Route::get('/', function () {
    $contacts = Contact::all();

    return view('index',compact('contacts'));
});

// ADMIN
Route::get('/admin',function(){
    return view('admin.index');
});
// MAIN
Route::resource('/admin/main/contact','ContactController');
// AUTRES PAGES
Route::get('/main',function(){
    $contacts = Contact::all();

    return view('index-main',compact('contacts'));
});
Route::get('/services',function(){
    return view('index-services');
});
Route::get('/blog',function(){
    return view('index-blog');
});
Route::get('/blog-post',function(){
    return view('index-blog-post');
});
Route::get('/contact',function(){
    return view('index-contact');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
