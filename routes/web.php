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

// Route::get('/', 'PagesController@index');

// Route::get('/signup', 'PagesController@signup');

// Route::get('/Companies', 'PagesController@Companies');

// Route::get('/Company', 'PagesController@Company');

// Route::post('loginSubmit', 'PagesController@loginSubmit');

// Route::post('signStore', 'PagesController@signStore');

Route::get('/', 'App\Http\Controllers\PostController@index');

Route::get('signup', 'App\Http\Controllers\PostController@signup');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
