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
Route::get('/homeForum', 'PagesController@homeToForum')->name('indexToForum');
Route::get('/homeGame', 'PagesController@homeToGame')->name('indexToGame');
Route::get('/skip', 'PagesController@skip')->name('skipStory');

Route::get('/forum', 'PagesController@forum')->name('forum');
Route::get('/game/reacties', 'PagesController@gamecomments')->name('GameComment');
Route::get('/playGame', 'PagesController@playGame')->name('playGame');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/addStory', 'PagesController@addStory')->name('addStory');
Route::get('/forum/{id}', 'PagesController@show')->name('forumShowOne');

Route::post('/adminLogin', 'PagesController@adminLogin')->name('adminLogin');
Route::get('/adminLogout', 'PagesController@adminLogout')->name('adminLogout');


Route::post('/storeStory', 'StoryController@store')->name('storeStory');
Route::post('/storeComment/{id}', 'StoryController@storeComment')->name('storeComment');

Route::post('/game/storeComment', 'GameController@store')->name('storeGameComment');
