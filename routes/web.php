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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return ('Welcome to My Personal Homepage.');
// });

// Route::get('/about', function () {
//     return ('This page contains facts about me. ');
// });

// Route::get('/favorites', function () {
//     return ('This page is all about my favorites.');
// });

// Route::get('/gallery', function () {
//     return ('This page includes captured moments in my life. ');
// });

Route::get('/home', 'App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/favorites', 'App\Http\Controllers\PagesController@favorites');
Route::get('/gallery', 'App\Http\Controllers\PagesController@gallery');