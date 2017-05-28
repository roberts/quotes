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

Route::get('home', 'HomeController@index')->name('home');
Route::get('company', 'CompanyController@index')->name('about');
Route::get('company/team', 'UsersController@index');
Route::get('/@{user}', 'UsersController@show');
Route::get('/@{user}/collections', 'CollectionsController@index');
Route::get('/@{user}/collections/{collection}', 'CollectionsController@show');
Route::get('quotes', 'QuotesController@main');
Route::group(['prefix' => 'quotes'], function () {
    Route::get('quotations', 'QuotesController@index');
    Route::get('quotations/create', 'QuotesController@create');
	Route::get('{quoteauthor}/{quote}', 'QuotesController@show')->name('quote.show');
	Route::post('quotations', 'QuotesController@store');
    Route::get('authors', 'QuoteAuthorsController@index');
    Route::get('authors/create', 'QuoteAuthorsController@create');
	Route::get('{quoteauthor}', 'QuoteAuthorsController@show');
	Route::post('authors', 'QuoteAuthorsController@store');
});
Route::get('books', 'BooksController@main');
Route::group(['prefix' => 'books'], function () {
    Route::get('authors', 'BookAuthorsController@index');
    Route::get('authors/create', 'BookAuthorsController@create');
	Route::get('authors/{bookauthor}', 'BookAuthorsController@show');
	Route::post('authors', 'BookAuthorsController@store');
	Route::get('titles', 'BooksController@index');
    Route::get('titles/create', 'BooksController@create');
	Route::get('{book}', 'BooksController@show');
	Route::post('titles', 'BooksController@store');
});



Route::get('{quote}', function ($quote) {
	$quoteauthor = 'elon-musk';
    return redirect()->route('quote.show', [$quoteauthor, $quote]);
})->where('quote', '[0-9]{7,}');
