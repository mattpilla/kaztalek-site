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

Route::get('/', ['uses' => 'SplashController@index']);

Route::group(['namespace' => 'MM', 'prefix' => 'mm'], function() {
    Route::get('/itemlist', ['uses' => 'ItemListController@index']);
});

Route::group(['namespace' => 'Games', 'prefix' => 'games'], function() {
	Route::get('/cafde', ['uses' => 'CafdeController@index']);
	Route::get('/cafde/download', ['uses' => 'CafdeController@download']);

	Route::get('/cafdehd', ['uses' => 'CafdeHDController@index']);
	Route::get('/cafdehd/download', ['uses' => 'CafdeHDController@download']);

	Route::get('/dungeon', ['uses' => 'DungeonController@index']);
	Route::get('/dungeon/download', ['uses' => 'DungeonController@download']);

	Route::get('/sonichighschool', ['uses' => 'SonicHighController@index']);
	Route::get('/sonichighschool/download', ['uses' => 'SonicHighController@download']);
});

Route::get('/1pause', function()  {
     return 'No.';
});

Route::get('/citytrial', ['uses' => 'Kirby\CityTrialController@index']);