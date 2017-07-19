<?php

namespace App\Http\Controllers;

use App\QuoteTopic;
use Illuminate\Http\Request;

class QuoteTopicsController extends Controller
{
    /**
     * QuoteTopicsController constructor.
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
        $quotetopics = QuoteTopic::latest()->get();

        return view('quotes.topics.index', compact('quotetopics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, ['slug' => 'required|unique:topics|max:255']);
        $this->validate($request, ['title' => 'required|unique:topics|max:255']);
        $this->validate($request, ['description' => 'required|min:3|max:255']);

        if (request('business') == 1 ) { $business = 1; } else { $business = 0; };
        if (request('leadership') == 1 ) { $leadership = 1; } else { $leadership = 0; };

        $quoteauthor = QuoteTopic::create([
            'slug' => request('slug'),
            'title' => request('title'),
            'description' => request('description'),
            'business' => $business,
            'leadership' => $leadership
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuoteTopic  $quoteTopic
     * @return \Illuminate\Http\Response
     */
    public function show(QuoteTopic $quotetopic)
    {
        return view('quotes.topics.show', compact('quotetopic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuoteTopic  $quoteTopic
     * @return \Illuminate\Http\Response
     */
    public function edit(QuoteTopic $quotetopic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuoteTopic  $quoteTopic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuoteTopic $quotetopic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuoteTopic  $quoteTopic
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuoteTopic $quotetopic)
    {
        //
    }
}
