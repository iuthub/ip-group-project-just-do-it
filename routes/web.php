<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.indexPage');
})->name('pages.indexPage');

//Route::get('show', function(){
//    $url = Storage::url('logo.jpg');
//    return "<img src='".$url."'/> ";
//});

Route::get('book',[
    'uses' => 'BookController@getBook',
    'as' => 'pages.book'
]);

Route::post('book',[
    'uses' => 'BookController@postBook',
    'as' => 'pages.book'
]);

Route::get('admin/booktable',[
    'uses' => 'BookController@getAdminIndex',
    'as' => 'admin.index'
]);

Route::get('admin/booktable/delete/{id}',[
    'uses' => 'BookController@getAdminDelete',
    'as' => 'admin.delete'
]);

//Route::get('/signin', function () {
//    return view('');
//})->name('');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/books/confirmation/{token}',[
    'uses'=>'BookController@confirmation',
    'as'=>'confirmation'
]);

Route::get('admin/booktable/search',[
    'uses' => 'BookController@postSearchBook',
    'as' => 'admin.search'
]);

Route::get('login', function () {
    return view('pages.signin');
})->name('login');

Route::get('register', function () {
    return view('pages.signup');
})->name('register');


//Sardor routes
Route::get('aboutUs', function ()   {
    return view('pages.AboutUs');
})->name('pages.AboutUs');

Route::post('aboutUs',[
    'uses' => 'CommentController@postComment',
    'as' => 'pages.AboutUs'
]);

Route::get('admin/comment',[
    'uses' => 'CommentController@getAdminIndex',
    'as' => 'admin.comment'
]);

Route::get('admin/comment/delete/{id}',[
    'uses' => 'CommentController@getAdminDelete',
    'as' => 'adminComment.delete'
]);

Route::get('admin/comment/search',[
    'uses' => 'CommentController@postSearchComment',
    'as' => 'adminComment.search'
]);

//gallery
Route::get('gallery', function ()  {
    return view('pages.Gallery');
})->name('pages.Gallery');
