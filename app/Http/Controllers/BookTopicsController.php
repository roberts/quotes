<?php

namespace App\Http\Controllers;

use App\BookTopic;
use Illuminate\Http\Request;

class BookTopicsController extends Controller
{
    /**
     * BookTopicsController constructor.
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
        $booktopics = BookTopic::latest()->get();

        return view('books.topics.index', compact('booktopics'));
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
     * @param  \App\BookTopic  $bookTopic
     * @return \Illuminate\Http\Response
     */
    public function show(BookTopic $booktopic)
    {
        return view('books.topics.show', compact('booktopic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookTopic  $bookTopic
     * @return \Illuminate\Http\Response
     */
    public function edit(BookTopic $booktopic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookTopic  $bookTopic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookTopic $booktopic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookTopic  $bookTopic
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookTopic $booktopic)
    {
        //
    }
}
