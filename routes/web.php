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
    return view('home');
});
Route::post('/url_shorten', 'urlShortenController@short')->name('url_shorten');
Route::get('/short/{short_link}', 'urlShortenController@redirect_short_link')->name('short_link');
Route::get('/view_all', 'urlShortenController@view_all')->name('all_urls');
