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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('favorite/add', 'FavoriteStockController@add')
    ->name('favorite.add');

Route::get('stock/{stock}/show', 'StockController@show')
    ->name('stock.show');

Route::group([
    'namespace' => 'Api',
    'prefix' => 'api/v1',
    'middleware' => 'api',
], function () {
    Route::get('rates/{currency}/{when?}', 'RateController@index');
});
