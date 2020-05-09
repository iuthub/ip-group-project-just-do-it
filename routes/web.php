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
//    return view('pages.indexPage');
]);
//    ->name('pages.indexPage');

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

Route::get('/books/confirmation/{token}',[
    'uses'=>'BookController@confirmation',
    'as'=>'confirmation'
]);

Route::get('admin/booktable/search',[
    'uses' => 'BookController@postSearchBook',
    'as' => 'admin.search'
]);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



//Route::get('login', function () {
//    return view('pages.signin');
//})->name('login');
//
//Route::get('register', function () {
//    return view('pages.signup');
//})->name('register');


//Sardor routes
Route::get('aboutUs', function ()   {
    return view('pages.AboutUs');
})->name('pages.AboutUs');

Route::post('aboutUs',[
    'uses' => 'CommentController@postComment',
    'as' => 'pages.AboutUs'
]);

Route::get('aboutUs/readmore', function ()   {
    return view('pages.Article');
})->name('pages.Article');


//Comment admin
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

// Davron Routes
Route::get('menu',[
    'uses' => 'orderSystem@getMenu',
    'as' => 'pages.menu'
]);

Route::get('order',[
    'uses' => 'orderSystem@getOrder',
    'as' => 'getOrder'
]);

Route::get('orderConfirmation',[
    'uses' => 'orderSystem@getOrderConfirmation',
    'as' => 'orderConfirmation'
]);

Route::post('orderConfirmation',[
    'uses' => 'orderSystem@postOrderConfirmation',
    'as' => 'postOrderConfirmation'
]);


Route::post('order',[
    'uses' => 'orderSystem@postOrder',
    'as' => 'pages.order'
]);

Route::get('admin/order', [
    'uses' => 'orderSystem@adminGetOrder',
    'as' => 'adminGetOrder'
]);

Route::post('admin/order', [
    'uses' => 'orderSystem@adminPostOrder',
    'as' => 'adminPostOrder'
]);

Route::get('admin/order/delete', [
    'uses' => 'orderSystem@adminOrderDelete',
    'as' => 'adminOrderDelete'
]);

//Permitted user admin
Route::get('admin/permitteduser',[
    'uses' => 'PermittedUserController@getAdminIndex',
    'as' => 'admin.permitteduser'
]);

Route::get('admin/permitteduser/delete/{id}',[
    'uses' => 'PermittedUserController@getAdminDelete',
    'as' => 'adminEmail.delete'
]);

Route::get('admin/permitteduser/search',[
    'uses' => 'PermittedUserController@postSearchEmail',
    'as' => 'adminEmail.search'
]);

Route::post('admin/permitteduser/create',[
    'uses' => 'PermittedUserController@postEmail',
    'as' => 'adminEmail.create'
]);

//Admin edit part starting from here :
Route::get('admin/edit',[
    'uses' => 'adminEdit@getAdminEdit',
    'as' => 'getAdminEdit'
]);

Route::get('admin/edit/addFood',[
    'uses' => 'adminEdit@getAddFood',
    'as' => 'getAddFood'
]);

Route::post('admin/edit/addFood',[
    'uses' => 'adminEdit@postAddFood',
    'as' => 'postAddFood'
]);

Route::get('admin/edit/modify',[
    'uses' => 'adminEdit@getModify',
    'as' => 'getModify'
]);
Route::post('admin/edit/modify',[
    'uses' => 'adminEdit@postModify',
    'as' => 'postModify'
]);

Route::get('admin/edit/delete',[
    'uses' => 'adminEdit@getDelete',
    'as' => 'getDelete'
]);

Route::post('admin/edit/delete',[
    'uses' => 'adminEdit@postDelete',
    'as' => 'postDelete'
]);
