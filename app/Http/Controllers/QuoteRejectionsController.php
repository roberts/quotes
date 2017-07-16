<?php

namespace App\Http\Controllers;

use App\QuoteRejection;
use App\QuoteAuthor;
use App\QuoteSubmission;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuoteRejectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, QuoteAuthor $quoteauthor)
    {
        $submission = QuoteSubmission::where('id', request('id'))->first();

        $quote = QuoteRejection::create([
            'quote_text' => $submission->quote_text,
            'author_id' => $submission->author_id,
            'likes' => $submission->likes,
            'book_name' => $submission->book_name,
            'book_id' => $submission->book_id,
            'isbn_13' => $submission->isbn_13,
            'isbn_10' => $submission->isbn_10,
            'created_by' => $submission->created_by,
            'rejected_by' => auth()->id(),
            'rejected_at' => Carbon::now(),
            'created_at' => $submission->created_at
        ]);

        QuoteSubmission::where('id', request('id'))->delete();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuoteRejection  $quoteRejection
     * @return \Illuminate\Http\Response
     */
    public function show(QuoteRejection $quoteRejection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuoteRejection  $quoteRejection
     * @return \Illuminate\Http\Response
     */
    public function edit(QuoteRejection $quoteRejection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuoteRejection  $quoteRejection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuoteRejection $quoteRejection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuoteRejection  $quoteRejection
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuoteRejection $quoteRejection)
    {
        //
    }
}
