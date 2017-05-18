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

Route::get('/', 'WelcomeController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('quotes', 'QuotesController@main');
Route::group(['prefix' => 'quotes'], function () {
    Route::get('quotations', 'QuotesController@index');
    Route::get('quotations/create', 'QuotesController@create');
	Route::get('quotations/{quote}', 'QuotesController@show');
	Route::post('quotations', 'QuotesController@store');
});
Route::group(['prefix' => 'quotes'], function () {
    Route::get('authors', 'QuoteAuthorsController@index');
    Route::get('authors/create', 'QuoteAuthorsController@create');
	Route::get('authors/{quoteAuthor}', 'QuoteAuthorsController@show');
	Route::post('authors', 'QuoteAuthorsController@store');
});
