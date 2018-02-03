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

Route::get('/api/events/view_event/{id}', 'EventController@getById');

Route::post('/api/events/add', 'EventController@addEvent');

Route::post('/api/events/rm', 'EventController@removeEvent');

Route::get('/api/events/{id}', 'EventController@getByEventOwner');

Route::get('/api/services', 'EventServiceController@getAllServices');

Route::get('/api/services/view_svc/{id}', 'EventServiceController@getById');

Route::post('/api/services/add', 'EventServiceController@addEventService');

Route::post('/api/services/rm', 'EventServiceController@removeEventService');

Route::get('/api/services/{id}', 'EventServiceController@getByEventId');