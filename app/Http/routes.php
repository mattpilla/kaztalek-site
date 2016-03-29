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
	Route::get('/dungeon', ['uses' => 'DungeonController@index']);
	Route::get('/dungeon/download', ['uses' => 'DungeonController@download']);

	Route::get('/sonic-high-school', ['uses' => 'SonicHighController@index']);
});

Route::get('/1pause', function()  {
     return 'No.';
});

Route::get('/city-trial', ['uses' => 'Kirby\CityTrialController@index']);