<?php

namespace App\Http\Controllers;

use App\Quote;
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
        $quotes = Quote::latest()->get();

        return view('quotes.index', compact('quotes'));
    }
    public function index()
    {
        $quotes = Quote::latest()->get();

        return view('quotes.quotations.index', compact('quote'));
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
            'created_by' => auth()->id(),
            'approved_by' => auth()->id(),
            'updated_by' => null
        ]);

        return redirect($quote->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        return view('quotes.quotations.show', compact('quote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quotes  $quotes
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
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
