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

Route::get('/', [
    'uses' => 'orderSystem@getCategory',
    'as' => 'pages.indexPage'
])->middleware('unauth');

Route::get('book', [
    'uses' => 'BookController@getBook',
    'as' => 'pages.book'
])->middleware('unauth');

Route::post('book', [
    'uses' => 'BookController@postBook',
    'as' => 'pages.book'
])->middleware('unauth');

Route::get('admin/booktable', [
    'uses' => 'BookController@getAdminIndex',
    'as' => 'admin.index'
])->middleware('auth');

Route::get('admin/booktable/delete/{id}', [
    'uses' => 'BookController@getAdminDelete',
    'as' => 'admin.delete'
])->middleware('auth');

Route::get('/books/confirmation/{token}', [
    'uses' => 'BookController@confirmation',
    'as' => 'confirmation'
])->middleware('unauth');

Route::get('admin/booktable/search', [
    'uses' => 'BookController@postSearchBook',
    'as' => 'admin.search'
])->middleware('auth');

Auth::routes();

//Sardor routes
Route::get('aboutUs', function () {
    return view('pages.AboutUs');
})->name('pages.AboutUs')->middleware('unauth');

Route::post('aboutUs', [
    'uses' => 'CommentController@postComment',
    'as' => 'pages.AboutUs'
])->middleware('unauth');

Route::get('aboutUs/readmore', function () {
    return view('pages.Article');
})->name('pages.Article')->middleware('unauth');


//Comment admin
Route::get('admin/comment', [
    'uses' => 'CommentController@getAdminIndex',
    'as' => 'admin.comment'
])->middleware('auth');

Route::get('admin/comment/delete/{id}', [
    'uses' => 'CommentController@getAdminDelete',
    'as' => 'adminComment.delete'
])->middleware('auth');

Route::get('admin/comment/search', [
    'uses' => 'CommentController@postSearchComment',
    'as' => 'adminComment.search'
])->middleware('auth');

//gallery
Route::get('gallery', function () {
    return view('pages.Gallery');
})->name('pages.Gallery')->middleware('unauth');

// Davron Routes
Route::get('menu', [
    'uses' => 'orderSystem@getMenu',
    'as' => 'pages.menu'
])->middleware('unauth');

Route::get('order', [
    'uses' => 'orderSystem@getOrder',
    'as' => 'getOrder'
])->middleware('unauth');

Route::get('orderConfirmation', [
    'uses' => 'orderSystem@getOrderConfirmation',
    'as' => 'orderConfirmation'
])->middleware('unauth');

Route::post('orderConfirmation', [
    'uses' => 'orderSystem@postOrderConfirmation',
    'as' => 'postOrderConfirmation'
])->middleware('unauth');


Route::post('order', [
    'uses' => 'orderSystem@postOrder',
    'as' => 'pages.order'
])->middleware('unauth');

Route::get('admin/order', [
    'uses' => 'orderSystem@adminGetOrder',
    'as' => 'adminGetOrder'
])->middleware('auth');

Route::post('admin/order', [
    'uses' => 'orderSystem@adminPostOrder',
    'as' => 'adminPostOrder'
])->middleware('auth');

Route::get('admin/order/delete', [
    'uses' => 'orderSystem@adminOrderDelete',
    'as' => 'adminOrderDelete'
])->middleware('auth');

//Permitted user admin
Route::get('admin/permitteduser', [
    'uses' => 'PermittedUserController@getAdminIndex',
    'as' => 'admin.permitteduser'
])->middleware('auth');

Route::get('admin/permitteduser/delete/{id}', [
    'uses' => 'PermittedUserController@getAdminDelete',
    'as' => 'adminEmail.delete'
])->middleware('auth');

Route::get('admin/permitteduser/search', [
    'uses' => 'PermittedUserController@postSearchEmail',
    'as' => 'adminEmail.search'
])->middleware('auth');

Route::post('admin/permitteduser/create', [
    'uses' => 'PermittedUserController@postEmail',
    'as' => 'adminEmail.create'
])->middleware('auth');

//Admin edit part starting from here :
Route::get('admin/edit', [
    'uses' => 'adminEdit@getAdminEdit',
    'as' => 'getAdminEdit'
])->middleware('auth');

Route::get('admin/edit/addFood', [
    'uses' => 'adminEdit@getAddFood',
    'as' => 'getAddFood'
])->middleware('auth');

Route::post('admin/edit/addFood', [
    'uses' => 'adminEdit@postAddFood',
    'as' => 'postAddFood'
])->middleware('auth');

Route::get('admin/edit/modify', [
    'uses' => 'adminEdit@getModify',
    'as' => 'getModify'
])->middleware('auth');
Route::post('admin/edit/modify', [
    'uses' => 'adminEdit@postModify',
    'as' => 'postModify'
])->middleware('auth');

Route::get('admin/edit/delete', [
    'uses' => 'adminEdit@getDelete',
    'as' => 'getDelete'
])->middleware('auth');

Route::post('admin/edit/delete', [
    'uses' => 'adminEdit@postDelete',
    'as' => 'postDelete'
])->middleware('auth');
