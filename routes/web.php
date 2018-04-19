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

Auth::routes();


Route::get('/', 'PagesController@home')->name('home');
Route::get('/home', 'PagesController@home')->name('home');
Route::get('/forum', 'PagesController@forum')->name('forum');
Route::get('/game', 'PagesController@game')->name('game');
Route::get('/addStory', 'PagesController@addStory')->name('addStory');
Route::get('/forum/{id}', 'PagesController@show')->name('forumShowOne');

Route::post('/storeStory', 'StoryController@store')->name('storeStory');
Route::post('/storeComment/{id}', 'StoryController@storeComment')->name('storeComment');
