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
Route::get('company/staff', 'CompanyController@show');
Route::get('company/advertising', 'CompanyController@advertising');
Route::get('company/contact', 'CompanyController@contact');
Route::get('company/privacy', 'CompanyController@privacy');
Route::get('company/terms', 'CompanyController@terms');
Route::get('company/team', 'UsersController@index');
Route::get('/@{user}/collections', 'CollectionsController@index');
Route::get('/@{user}/collections/{collection}', 'CollectionsController@show');
Route::get('/@{user}', 'UsersController@show');
Route::get('quotes', 'QuotesController@index');
Route::group(['prefix' => 'quotes'], function () {
    Route::get('topics', 'QuoteTopicsController@index');
    Route::post('topics', 'QuoteTopicsController@store');
    Route::get('topics/{quotetopic}', 'QuoteTopicsController@show');
    Route::get('submissions', 'QuoteSubmissionsController@index');
    Route::get('submissions/{quotesubmission}', 'QuoteSubmissionsController@show');
    Route::get('authors', 'QuoteAuthorsController@index');
    Route::post('authors', 'QuoteAuthorsController@store');
    Route::get('authors/circles', 'CirclesController@index');
    Route::post('authors/circles', 'CirclesController@store');
    Route::post('authors/circles/newrelation', 'CirclesController@storeRelation');
    Route::get('authors/circles/{circle}', 'CirclesController@show');
    Route::get('authors/data', 'QuoteAuthorsController@data');
    Route::get('authors/missing', 'QuoteAuthorsController@missing');
    Route::post('{quoteauthor}/headshots', function() {
        request()->file('headshot')->store('authors/headshots', 'gcs');
        return back();
    });
    Route::get('{quoteauthor}/submissions', 'QuoteSubmissionsController@author');
    Route::post('{quoteauthor}/submissions', 'QuoteSubmissionsController@store');
    Route::post('{quoteauthor}/rejections', 'QuoteRejectionsController@store');
    Route::post('{quoteauthor}/details', 'AuthorDetailsController@store');
    Route::post('{quoteauthor}/quotes', 'QuotesController@store');
	Route::get('{quoteauthor}/{quote}', 'QuotesController@show')->name('quote.show');
	Route::get('{quoteauthor}', 'QuoteAuthorsController@show');
});
Route::get('books', 'BooksController@index');
Route::post('books', 'BooksController@store');
Route::group(['prefix' => 'books'], function () {
    Route::get('authors', 'BookAuthorsController@index');
    Route::post('authors', 'BookAuthorsController@store');
	Route::get('authors/{bookauthor}', 'BookAuthorsController@show');
    Route::get('topics', 'BookTopicsController@index');
    Route::post('topics', 'BookTopicsController@store');
    Route::get('topics/{booktopic}', 'BookTopicsController@show');
	Route::get('{book}', 'BooksController@show');
});
Route::get('/sitemap', 'SitemapController@index');
Route::group(['prefix' => 'sitemap'], function () {
	Route::get('main', 'SitemapController@main');
	Route::get('quoteauthors', 'SitemapController@quoteauthors');
    Route::get('quotes', 'SitemapController@quotes');
    Route::get('bookauthors', 'SitemapController@bookauthors');
    Route::get('books', 'SitemapController@books');
    Route::get('users', 'SitemapController@users');
});




Route::get('{quote}', function ($quote) {
	$quoteauthor = 'elon-musk';
    return redirect()->route('quote.show', [$quoteauthor, $quote]);
})->where('quote', '[0-9]{7,}');
