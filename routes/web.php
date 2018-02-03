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

Route::get('/api/events', 'EventController@getAllEvents');

Route::post('/api/events/add', 'EventController@addEvent');

Route::post('/api/events/rm/{id}', 'EventController@removeEvent');

Route::get('/api/events/{id}', 'EventController@getByEventOwner');