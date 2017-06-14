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
		$quoteauthor = QuoteAuthor::active()->orderBy('updated_at', 'desc')->first();
		$quote = Quote::active()->orderBy('updated_at', 'desc')->first();
		$user = User::active()->orderBy('updated_at', 'desc')->first();

		return response()->view('sitemap.index', [
			'quoteauthor' => $quoteauthor,
			'quote' => $quote,
			'user' => $user,
		])->header('Content-Type', 'text/xml');
	}

	public function main()
	{
		return response()->view('sitemap.main')->header('Content-Type', 'text/xml');
	}

	public function quoteauthors()
	{
		$quoteauthors = QuoteAuthor::latest()->get();
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
		$bookauthors = BookAuthor::latest()->get();
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
