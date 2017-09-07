<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'Admin\AdminController@index')->name('admin')->middleware('auth', 'admin');
Route::resource('/admin/category', 'Admin\CategoryController');
Route::resource('/admin/post', 'Admin\PostController');
Route::resource('/admin/product-category', 'Admin\ProductCategoryController');
Route::resource('/admin/product', 'Admin\ProductController');
Route::resource('/admin/photo', 'Admin\PhotoController');