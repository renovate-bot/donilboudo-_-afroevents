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

Route::get('/countries', 'CountryController@index');

Route::get('/countries/{id}', 'CountryController@show');

Route::get('/cities', 'CityController@index');

Route::get('/cities/{id}', 'CityController@show');

//*** Categories ***/

Route::get('/categories', 'CategoryController@index');

Route::post('categories', ['uses' => 'CategoryController@store']);

Route::get('/categories/create', 'CategoryController@create');

Route::get('/categories/{id}', 'CategoryController@show');

Route::get('categories/{id}/edit', ['uses' => 'CategoryController@edit']);

Route::put('categories/{id}', ['uses' => 'CategoryController@update']);

//This way is not a good approach. To be modified! we need  to use a delete request instead of using a get.
Route::get('categories/{id}/delete', ['uses' => 'CategoryController@destroy']);

//*** Organizers ***/

Route::get('/organizers', 'OrganizerController@index');

Route::post('organizers', ['uses' => 'OrganizerController@store']);

Route::get('/organizers/create', 'OrganizerController@create');

Route::get('/organizers/{id}', 'OrganizerController@show');

Route::get('organizers/{id}/edit', ['uses' => 'OrganizerController@edit']);

Route::put('organizers/{id}', ['uses' => 'OrganizerController@update']);

//This way is not a good approach. To be modified! we need  to use a delete request instead of using a get.
Route::get('organizers/{id}/delete', ['uses' => 'OrganizerController@destroy']);

//*** Events ***/

Route::get('/events', 'EventController@index');

Route::get('/events/{id}', 'EventController@show');