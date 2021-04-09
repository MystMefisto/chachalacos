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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/post', 'HomeController@post')->name('post');

Route::get('/home', function(){
    return view('home');
})->middleware('auth');


Route::get('/admin/categories', 'Admin\CategoriesController@index')->name('admin.categories');

Auth::routes();

