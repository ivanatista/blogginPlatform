<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/asc', 'HomeController@indexAsc');

// Route::get('/home', 'PostController@index')->name('home');
Route::get('/submit', 'PostController@create');
Route::post('/submit', 'PostController@insert');
Route::post('/posts', 'PostController@showAuthorPosts');
Route::get('/{id}/toggleActive', 'PostController@toggleActive');

// Admin Routes
Route::get('/home', 'AdminController@index')->name('home');
Route::get('/admin/post/show', 'PostController@index');
Route::get('/admin/post/{id}/toggle', 'PostController@toggleActive');

Route::get('/admin/post/{id}/edit', 'PostController@edit');
Route::get('/admin/post/create', 'PostController@create');


// Route::get('/import', 'AutoImportController@autoImport');