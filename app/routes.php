<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/items/{name}', ['as' => 'item', 'uses' => 'ItemsController@item']);

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/nosotros', ['as' => 'we', 'uses' => function(){
  return View::make('we');
}]);

Route::get('/items', ['as' => 'items', 'uses' => 'ItemsController@item']);
Route::get('/items/all', ['as' => 'itemsAll', 'uses' => 'ItemsController@itemsAll']);
Route::get('/items/filter/{name}', ['as' => 'itemsFilter', 'uses' => 'ItemsController@itemsFilter']);


Route::get('sign-up', ['as' => 'sign_up', 'uses' => 'UsersController@signUp']);
Route::post('sign-up', ['as' => 'register', 'uses' => 'UsersController@register']);


Route::get('login', ['as' => 'iniciar', 'uses' => 'AuthController@iniciar']);
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

