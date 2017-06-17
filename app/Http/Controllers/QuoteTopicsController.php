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
    public function store(Request $request)
    {
        //
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
