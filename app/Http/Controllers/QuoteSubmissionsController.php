<?php

namespace App\Http\Controllers;

use App\QuoteSubmission;
use App\QuoteAuthor;
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
    public function store(QuoteAuthor $quoteauthor)
    {
        $this->validate(request(), ['quote_text' => 'required|min:10|unique:quote_submissions|unique:quote_rejections|unique:quotes|max:700']);

        $quotesubmission = new QuoteSubmission;
        $quotesubmission->quote_text = request('quote_text');
        $quotesubmission->display_name = $quoteauthor->display_name;
        $quotesubmission->author_id = $quoteauthor->id;
        $quotesubmission->created_by = auth()->id();
        $quotesubmission->created_at = date('Y-m-d H:i:s');
        $quotesubmission->save();

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
