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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::view('/', 'index');
Route::view('/auth', 'auth');
Route::view('/about', 'about');
Route::view('/gallery', 'gallery');
Route::view('/sponsors', 'sponsors');
Route::view('/team', 'team');
Route::get('/events', 'EventController@getEventsPage');
Route::view('/home', 'events');
