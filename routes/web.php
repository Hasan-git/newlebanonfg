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
Route::get('/soon', function () {
    return view('soon');
});

Route::get('/', 'HomeController@index');

Route::get('contact', 'ContactController@index');

Route::get('about', 'TblaboutController@index');

Route::resource('news', 'NewsController');

Route::get('single/{id}', 'NewsController@show' );

Route::resource('clubs', 'TblteamController');

Route::get('clubstats/{id}', 'TblclubstatController@show' );

Route::get('playerstats/{id}', 'TblplayerstatController@show' );

Route::resource('matches', 'MatchController');

Route::get('matchstats/{id}', 'MatchstatController@show');

Route::resource('ranks', 'RankController');

Route::resource('gallery', 'GalleryController');

Route::get('pics/{type}', 'GalleryController@show');

Route::get('poll', 'PollController@index');


