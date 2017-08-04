<?php

namespace App\Http\Controllers;

use App\Circle;
use App\QuoteAuthor;
use Illuminate\Http\Request;

class CirclesController extends Controller
{
    /**
     * CirclesController constructor.
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
        $primarycircles = Circle::where('id', '<', 10)->orderBy('id')->with('children')->get();
        $missingircles = QuoteAuthor::doesntHave('circles')->whereNotIn('id', [1, 2, 3])->orderBy('id')->limit(5)->get();
        $missingcount = QuoteAuthor::doesntHave('circles')->whereNotIn('id', [1, 2, 3])->orderBy('last_name', 'asc')->count();

        return view('quotes.authors.circles.index', compact('primarycircles', 'missingcircles','missingcount'));
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
     * @param  \App\Circle  $circle
     * @return \Illuminate\Http\Response
     */
    public function show(Circle $circle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Circle  $circle
     * @return \Illuminate\Http\Response
     */
    public function edit(Circle $circle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Circle  $circle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Circle $circle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Circle  $circle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Circle $circle)
    {
        //
    }
}
