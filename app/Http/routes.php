<?php

Route::get('/', ['uses' => 'SplashController@index']);

/**
* Majora's Mask
*/
Route::group(['namespace' => 'MM', 'prefix' => 'mm'], function() {
    Route::get('/itemlist', ['uses' => 'ItemListController@index']);

    // Google Doc Pages
    Route::get('/actions', ['uses' => 'GoogleDocController@action']);
    Route::get('/scenes', ['uses' => 'GoogleDocController@scene']);
});

/**
* My Games
*/
Route::group(['namespace' => 'Games', 'prefix' => 'games'], function() {
    Route::get('/', ['uses' => 'GameController@index']);

    Route::get('/cafde', ['uses' => 'CafdeController@index']);
    Route::get('/cafde/download', ['uses' => 'CafdeController@download']);

    Route::get('/cafdehd', ['uses' => 'CafdeHDController@index']);
    Route::get('/cafdehd/download', ['uses' => 'CafdeHDController@download']);

    Route::get('/dungeon', ['uses' => 'DungeonController@index']);
    Route::get('/dungeon/download', ['uses' => 'DungeonController@download']);

    Route::get('/sonichighschool', ['uses' => 'SonicHighController@index']);
    Route::get('/sonichighschool/download', ['uses' => 'SonicHighController@download']);
});

/**
* Misc
*/
Route::get('/citytrial', ['uses' => 'Kirby\CityTrialController@index']);

Route::get('/1pause', function()  {
     return 'No.';
});
