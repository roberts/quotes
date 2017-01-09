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
    return view('home');
})->name('home');

Route::group(['prefix' => 'quotes'], function() {
    Route::get('/', function () {
        return view('quotes.quotes');
    })->name('quotes');
    Route::get('/quotations', function () {
        return view('quotes.quotations');
    })->name('quotations');
    Route::get('/authors', function () {
        return view('quotes.authors');
    })->name('authors');
    Route::get('/excerpts', function () {
        return view('quotes.excerpts');
    })->name('excerpts');
    Route::get('/topics', function () {
        return view('quotes.topics');
    })->name('topics');
});