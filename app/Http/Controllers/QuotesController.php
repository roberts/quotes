<?php

namespace App\Http\Controllers;

use App\Quote;
use App\QuoteAuthor;
use App\QuoteSubmission;
use Carbon\Carbon;
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
    public function index()
    {
        $quotes = Quote::whereIn('author_id', [4, 5, 6, 7, 8, 9, 10, 11, 22, 72, 90, 95, 99])->inRandomOrder()->limit(20)->get();

        return view('quotes.index', compact('quotes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, QuoteAuthor $quoteauthor)
    {
        $submission = QuoteSubmission::find(request('id'));

        $quote = Quote::create([
            'author_id' => $submission->author_id,
            'quote_text' => $submission->quote_text,
            'created_by' => $submission->created_by,
            'approved_by' => auth()->id(),
            'updated_by' => auth()->id(),
            'approved_at' => Carbon::now(),
            'created_at' => $submission->created_at
        ]);

        QuoteSubmission::find(request('id'))->delete();

        return back();
    }

    /**
     * Display the specified resource.
     *
    * @param  $quoteauthor
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(QuoteAuthor $quoteauthor, Quote $quote)
    {
        if ($quoteauthor->slug !== $quote->author->slug) {
            return redirect()->to($quote->path());
        }

        return view('quotes.show', compact('quote'));
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
