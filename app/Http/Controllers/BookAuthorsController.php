<?php

namespace App\Http\Controllers;

use App\BookAuthor;
use Illuminate\Http\Request;

class BookAuthorsController extends Controller
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
        BookAuthor::whereIn('id', [20, 22, 26, 27, 28, 29, 34, 35, 36, 39, 40, 41, 42, 43, 44, 45, 46, 101, 156, 188, 189, 200, 201, 202, 203, 204, 205])->orderBy('last_name', 'asc')->get();

        return view('books.authors.index', compact('bookauthors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookauthor = BookAuthor::create([
            'slug' => request('slug'),
            'display_name' => request('display_name'),
            'last_name' => request('last_name'),
            'bio_line' => request('bio_line'),
            'profile_pic' => null,
            'cover_image' => null,
            'active' => 1,
            'created_by' => auth()->id(),
            'updated_by' => null
        ]);

        return redirect($bookauthor->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function show(BookAuthor $bookauthor)
    {
        return view('books.authors.show', compact('bookauthor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function edit(BookAuthor $bookAuthor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookAuthor $bookAuthor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookAuthor  $bookAuthor
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookAuthor $bookAuthor)
    {
        //
    }
}
