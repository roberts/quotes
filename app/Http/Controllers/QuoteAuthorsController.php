<?php

namespace App\Http\Controllers;

use App\QuoteAuthor;
use App\AuthorDetail;
use App\Quote;
use App\QuoteSubmission;
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
        $featuredauthors = QuoteAuthor::whereIn('id', [4, 5, 6, 7, 8, 9, 10, 11, 22, 72, 95, 99])->orderBy('last_name', 'asc')->get();
        $secondaryauthors = QuoteAuthor::has('quotes', '>=', 1)->whereNotIn('id', [4, 5, 6, 7, 8, 9, 10, 11, 22, 72, 95, 99])->orderBy('last_name', 'asc')->get();
        $missingquotes = QuoteAuthor::doesntHave('quotes')->whereNotIn('id', [1, 2, 3])->latest()->limit(5)->get();
        $missingcount = QuoteAuthor::doesntHave('quotes')->whereNotIn('id', [1, 2, 3])->orderBy('last_name', 'asc')->count();

        return view('quotes.authors.index', compact('featuredauthors','secondaryauthors', 'missingquotes','missingcount'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $authors = QuoteAuthor::doesntHave('details')->whereNotIn('id', [1, 2, 3])->orderBy('last_name', 'asc')->get();
        $datacount = QuoteAuthor::doesntHave('details')->whereNotIn('id', [1, 2, 3])->orderBy('last_name', 'asc')->count();
        $authorstotal = QuoteAuthor::count();

        return view('quotes.authors.data', compact('authors','datacount', 'authorstotal'));
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function missing()
    {
        $authors = QuoteAuthor::doesntHave('quotes')->whereNotIn('id', [1, 2, 3])->orderBy('last_name', 'asc')->get();
        $authorscount = QuoteAuthor::doesntHave('quotes')->whereNotIn('id', [1, 2, 3])->orderBy('last_name', 'asc')->count();
        $authorstotal = QuoteAuthor::count();

        return view('quotes.authors.missing', compact('authors','authorscount', 'authorstotal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['display_name' => 'required|min:8|unique:authors|max:255']);
        $this->validate($request, ['last_name' => 'required|min:3|max:255']);
        $this->validate($request, ['slug' => 'required|unique:authors|max:255']);

        $quoteauthor = QuoteAuthor::create([
            'slug' => request('slug'),
            'display_name' => request('display_name'),
            'last_name' => request('last_name'),
            'created_by' => auth()->id()
        ]);

        session()->flash('message', 'Thanks for adding an author');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuoteAuthor  $quoteauthor
     * @return \Illuminate\Http\Response
     */
    public function show(QuoteAuthor $quoteauthor)
    {
        $authordetail = AuthorDetail::where('author_id', $quoteauthor->id)->orderBy('created_at', 'desc')->first();
        $submissioncount = QuoteSubmission::where('author_id', $quoteauthor->id)->count();

        return view('quotes.authors.show', compact('quoteauthor', 'authordetail','submissioncount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuoteAuthor  $quoteauthor
     * @return \Illuminate\Http\Response
     */
    public function edit(QuoteAuthor $quoteauthor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuoteAuthor  $quoteauthor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuoteAuthor $quoteauthor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuoteAuthor  $quoteauthor
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuoteAuthor $quoteauthor)
    {
        //
    }
}
