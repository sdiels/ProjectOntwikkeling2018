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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/home', 'PagesController@home')->name('indexToForum');
Route::get('/skip', 'PagesController@skip')->name('skipStory');

Route::get('/info', 'PagesController@info')->name('info');
Route::get('/forum', 'PagesController@forum')->name('forum');
Route::get('/game', 'PagesController@game')->name('game');
Route::get('/game/reacties', 'PagesController@gamecomments')->name('GameComment');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/addStory', 'PagesController@addStory')->name('addStory');
Route::get('/forum/{id}', 'PagesController@show')->name('forumShowOne');

Route::get('/story1', 'PagesController@story1')->name('story1');


Route::post('/storeStory', 'StoryController@store')->name('storeStory');
Route::post('/storeComment/{id}', 'StoryController@storeComment')->name('storeComment');

Route::post('/game/storeComment', 'GameController@store')->name('storeGameComment');
