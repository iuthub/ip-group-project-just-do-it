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
});

Route::get('/book',[
    'uses'=>'bookController@getBook',
    'as'=>'getBook'
])->name('getBook');

Route::post('/book',[
    'uses'=>'bookController@postBook',
    'as'=>'postBook'
])->name('postBook');


Route::get('show', function(){
    $url = Storage::url('logo.jpg');
    return "<img src='".$url."'/> ";
});
Route::get('/AboutUs', function ()   {
    return view('pages/AboutUs');
});

Route::get('/signUp', function ()   {
    return view('pages/Authentication/index');
});
Route::get('/index', function () {
    return view('index');
});

