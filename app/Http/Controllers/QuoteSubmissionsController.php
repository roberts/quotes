<?php

namespace App\Http\Controllers;

use App\QuoteSubmission;
use Illuminate\Http\Request;

class QuoteSubmissionsController extends Controller
{
    /**
     * QuoteSubmissionsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotesubmissions = QuoteSubmission::latest()->get();

        return view('quotes.submissions.index', compact('quotesubmissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quotes.submissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quotesubmission = QuoteSubmission::create([
            'quote_text' => request('quote_text'),
            'author_name' => request('author_name'),
            'book_name' => null,
            'likes' => null,
            'isbn_10' => null,
            'isbn_13' => null,
            'author_id' => request('author_id'),
            'book_id' => null,
            'created_by' => auth()->id(),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect($quotesubmission->author->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuoteSubmission  $quoteSubmission
     * @return \Illuminate\Http\Response
     */
    public function show(QuoteSubmission $quotesubmission)
    {
        return view('quotes.submissions.show', compact('quotesubmission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuoteSubmission  $quoteSubmission
     * @return \Illuminate\Http\Response
     */
    public function edit(QuoteSubmission $quotesubmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuoteSubmission  $quoteSubmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuoteSubmission $quotesubmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuoteSubmission  $quoteSubmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuoteSubmission $quotesubmission)
    {
        //
    }
}
