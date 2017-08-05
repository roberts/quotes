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
        $missingcircles = QuoteAuthor::doesntHave('circles')->whereNotIn('id', [1, 2, 3])->orderBy('id')->limit(5)->get();
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
        $authors = $circle->authors()->orderBy('last_name', 'asc')->get();
        $featuredauthors = $circle->authors()->where('featured', true)->limit(12)->orderBy('last_name', 'asc')->get();
        $missingcircles = QuoteAuthor::doesntHave('circles')->whereNotIn('id', [1, 2, 3])->orderBy('id')->get();

        return view('quotes.authors.circles.show', compact('circle', 'featuredauthors','authors', 'missingcircles'));
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

    /**
     * Store a newly created circle relationship in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRelation(Request $request)
    {
        $author = QuoteAuthor::find(request('author_id'));
        $circle = Circle::find(request('circle_id'));
        $author->circles()->attach([
            $circle->id => ['created_by' => auth()->id(),
                            'featured' => request('featured'),
                            'defining' => request('defining')
                            ],
            $circle->parent => ['created_by' => auth()->id(),
                            'featured' => 0,
                            'defining' => 0
                            ],
        ]);

        session()->flash('message', 'Thanks for adding '. $author->display_name .' to the '. $circle->title .' circle');

        return back();
    }
}
