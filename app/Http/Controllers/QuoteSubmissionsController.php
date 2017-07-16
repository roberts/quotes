<?php

namespace App\Http\Controllers;

use App\QuoteSubmission;
use App\QuoteAuthor;
use Carbon\Carbon;
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
        $authors = QuoteSubmission::latest()->get();

        return view('quotes.submissions.index', compact('authors'));
    }

    /**
     * Display the first submission for the author for approval.
     *
     * @return \Illuminate\Http\Response
     */
    public function author(QuoteAuthor $quoteauthor)
    {
        $submission = QuoteSubmission::where('author_id', $quoteauthor->id)->orderBy('created_at', 'desc')->first();

        return view('quotes.submissions.author', compact('quoteauthor', 'submission'));
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
    public function store(Request $request, QuoteAuthor $quoteauthor)
    {
        $this->validate($request, ['quote_text' => 'required|min:10|unique:quote_submissions|unique:quote_rejections|unique:quotes|max:700']);

        $quoteauthor->addSubmission(request('quote_text'));

        session()->flash('message', 'Thanks for submitting a quote');

        return back();
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
