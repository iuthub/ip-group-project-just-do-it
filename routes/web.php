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
})->name("indexPage");

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/books/confirmation/{token}',[
    'uses'=>'BookController@confirmation',
    'as'=>'confirmation'
]);
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