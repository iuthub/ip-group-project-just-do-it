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
<<<<<<< HEAD
    return view('pages/indexPage');
})->name('pages.indexPage');
=======
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

>>>>>>> b2500df78f792ce3ce1eb503ee7dba9785e66913

Route::get('show', function(){
    $url = Storage::url('logo.jpg');
    return "<img src='".$url."'/> ";
});
<<<<<<< HEAD

Route::get('book',[
    'uses' => 'BookController@getBook',
    'as' => 'pages.book'
]);

Route::post('book',[
    'uses' => 'BookController@postBook',
    'as' => 'pages.book'
]);

Route::get('admin',[
    'uses' => 'BookController@getAdminIndex',
    'as' => 'admin.index'
]);

Route::get('admin/delete/{id}',[
    'uses' => 'BookController@getAdminDelete',
    'as' => 'admin.delete'
]);

//Route::get('/signin', function () {
//    return view('');
//})->name('');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/books/confirmation/{token}',[
    'uses'=>'BookController@confirmation',
    'as'=>'confirmation'
]);

=======
Route::get('/AboutUs', function ()   {
    return view('pages/AboutUs');
});

Route::get('/signUp', function ()   {
    return view('pages/Authentication/index');
});
>>>>>>> b2500df78f792ce3ce1eb503ee7dba9785e66913
