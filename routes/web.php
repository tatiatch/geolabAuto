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

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('homepage', 'HomepageController');
Route::get('/homepage', 'HomepageController@index')->name('home');
Route::get('/homepage/create', 'HomepageController@create')->name('home');
Route::post('/homepage', 'HomepageController@store')->name('home');
Route::get('/homepage/{homepage}', 'HomepageController@show')->name('home');
Route::get('/homepage/{homepage}/edit', 'HomepageController@edit')->name('home');
Route::patch('/homepage/{homepage}', 'HomepageController@update')->name('home');
Route::delete('/homepage/{homepage}', 'HomepageController@destroy')->name('home');

//Route::resource('services', 'ServicesController');
Route::get('/services', 'ServicesController@index')->name('home');
Route::get('/services/create', 'ServicesController@create')->name('home');
Route::post('/services', 'ServicesController@store')->name('home');
Route::get('/services/{services}', 'ServicesController@show')->name('home');
Route::get('/services/{services}/edit', 'ServicesController@edit')->name('home');
Route::patch('/services/{services}', 'ServicesController@update')->name('home');
Route::delete('/services/{services}', 'ServicesController@destroy')->name('home');

Route::get('/subscribers', 'SubscribersController@index')->name('home');
Route::post('/', 'SubscribersController@store');

Route::get('/links', 'SocialLinksController@links')->name('home');
Route::get('/links/{link}/edit', 'SocialLinksController@edit')->name('home');
Route::patch('/links/{link}', 'SocialLinksController@update')->name('home');

Route::get('/', 'PublicController@index');