<?php

namespace App\Http\Controllers;

use App\QuoteAuthor;
use App\Quote;
use App\BookAuthor;
use App\Book;
use App\User;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
	{
		return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
	}

	public function main()
	{
		return response()->view('sitemap.main')->header('Content-Type', 'text/xml');
	}

	public function quoteauthors()
	{
		$quoteauthors = QuoteAuthor::has('quotes', '>=', 1)->latest()->get();
		return response()->view('sitemap.quoteauthors', [
			'quoteauthors' => $quoteauthors,
		])->header('Content-Type', 'text/xml');
	}

	public function quotes()
	{
		$quotes = Quote::latest()->get();
		return response()->view('sitemap.quotes', [
			'quotes' => $quotes,
		])->header('Content-Type', 'text/xml');
	}

	public function bookauthors()
	{
		$bookauthors = BookAuthor::whereIn('id', [20, 22, 26, 27, 28, 29, 34, 35, 36, 39, 40, 41, 42, 43, 44, 45, 46, 101, 156, 188, 189, 200, 201, 202, 203, 204, 205])->latest()->get();
		return response()->view('sitemap.bookauthors', [
			'bookauthors' => $bookauthors,
		])->header('Content-Type', 'text/xml');
	}

	public function books()
	{
		$books = Book::latest()->get();
		return response()->view('sitemap.books', [
			'books' => $books,
		])->header('Content-Type', 'text/xml');
	}

	public function users()
	{
		$users = User::latest()->get();
		return response()->view('sitemap.users', [
			'users' => $users,
		])->header('Content-Type', 'text/xml');
	}


}
