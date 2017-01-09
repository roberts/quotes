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

Route::get('/quotes', function () {
    return view('quotes.quotes');
})->name('quotes');

Route::get('/quotes/quotations', function () {
    return view('quotes.quotations');
})->name('quotations');

Route::get('/quotes/quotations/{quote_id}', function (quote_id) {
    return view('quotes.quotation', ['quote_id' => $quote_id]);
})->name('quotation');

Route::get('/quotes/authors', function () {
    return view('quotes.authors');
})->name('authors');

Route::get('/quotes/authors/{author_id}', function (author_id) {
    return view('quotes.author', ['author_id' => $author_id]);
})->name('author');

Route::get('/quotes/excerpts', function () {
    return view('quotes.excerpts');
})->name('excerpts');

Route::get('/quotes/excerpts/{excerpt_id}', function (excerpt_id) {
    return view('quotes.excerpt', ['excerpt_id' => $excerpt_id]);
})->name('excerpt');

Route::get('/quotes/topics', function () {
    return view('quotes.topics');
})->name('topics');

Route::get('/quotes/topics/{topic_id}', function (topic_id) {
    return view('quotes.topic', ['topic_id' => $topic_id]);
})->name('topic');
