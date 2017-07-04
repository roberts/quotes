<?php

namespace App\Http\Controllers;

use App\Quote;
use App\QuoteAuthor;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    /**
     * QuotesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['main', 'index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        $quotes = Quote::whereIn('author_id', [4, 5, 6, 7, 8, 9, 10, 11, 22, 72, 90, 95, 99])->inRandomOrder()->limit(20)->get();
        $sidequotes = Quote::whereIn('author_id', [4, 5, 6, 7, 8, 9, 10, 11])->inRandomOrder()->limit(5)->get();
        $sideauthors = QuoteAuthor::whereIn('id', [4, 5, 6, 7, 9, 10, 22, 72, 99, 100])->inRandomOrder()->limit(10)->get();

        return view('quotes.index', compact('quotes','sidequotes','sideauthors'));
    }
    public function index()
    {
        $quotes = Quote::latest()->get();
        $sidequotes = Quote::whereIn('author_id', [4, 5, 6, 7, 8, 9, 10, 11])->inRandomOrder()->limit(5)->get();
        $sideauthors = QuoteAuthor::whereIn('id', [4, 5, 6, 7, 9, 10, 22, 72, 99, 100])->inRandomOrder()->limit(10)->get();

        return view('quotes.quotations.index', compact('quotes','sidequotes','sideauthors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quotes.quotations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quote = Quote::create([
            'author_id' => request('author_id'),
            'quote_text' => request('quote_text'),
            'active' => 1,
            'created_by' => request('created_by'),
            'approved_by' => auth()->id(),
            'updated_by' => null
        ]);

        return redirect($quote->path());
    }

    /**
     * Display the specified resource.
     *
    * @param  $quoteauthor
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show($quoteauthor, Quote $quote)
    {
        if ($quoteauthor !== $quote->author->slug) {
            return redirect()->to($quote->path());
        }
        $sidequotes = Quote::whereIn('author_id', [4, 5, 6, 7, 8, 9, 10, 11])->inRandomOrder()->limit(5)->get();
        $sideauthors = QuoteAuthor::whereIn('id', [4, 5, 6, 7, 9, 10, 22, 72, 99, 100])->inRandomOrder()->limit(10)->get();

        return view('quotes.quotations.show', compact('quote','sidequotes','sideauthors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
