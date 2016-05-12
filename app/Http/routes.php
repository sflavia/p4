<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| authentication route
|--------------------------------------------------------------------------
*/

# Show login form
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
# Show registration form
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');
# Process logout
Route::get('/logout', 'Auth\AuthController@logout');

Route::get('/', function () {
    return view('index');
});

Route::group(['middleware' => 'auth'], function() {


    #Route::get('/book/edit/{id?}', 'BookController@getEdit');
    #Route::post('/book/edit', 'BookController@postEdit');
    Route::get('/create', 'EventController@getCreate');
    Route::post('/create', 'EventController@postCreate');

  #Route::get('/book/delete/{id?}', 'BookController@getDelete');
  
    Route::get('/event/show/{id?}', 'EventController@getShow');
    Route::get('/events', 'EventController@getIndex');

    #Route::get('/book/search', 'BookController@getSearch');
    #Route::post('/book/search', 'BookController@postSearch');
});
