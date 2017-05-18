<?php

namespace App\Http\Controllers;

use App\QuoteAuthor;
use Illuminate\Http\Request;

class QuoteAuthorsController extends Controller
{
    /**
     * QuoteAuthorsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = QuoteAuthor::latest()->get();

        return view('quotes.authors.index', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quotes.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quote = QuoteAuthor::create([
            'slug' => request('slug'),
            'display_name' => request('display_name'),
            'last_name' => request('last_name'),
            'bio_line' => request('bio_line'),
            'profile_pic' => null,
            'cover_image' => null,
            'active' => 1,
            'created_by' => auth()->id(),
            'updated_by' => null
        ]);

        return redirect($author->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function show(QuoteAuthor $quoteAuthor)
    {
        return view('quotes.author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuoteAuthors  $quoteAuthors
     * @return \Illuminate\Http\Response
     */
    public function edit(QuoteAuthor $quoteAuthor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuoteAuthors  $quoteAuthors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuoteAuthor $quoteAuthor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuoteAuthor  $quoteAuthor
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuoteAuthor $quoteAuthor)
    {
        //
    }
}
