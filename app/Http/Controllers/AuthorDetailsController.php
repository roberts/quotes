<?php

namespace App\Http\Controllers;

use App\AuthorDetail;
use App\QuoteAuthor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuthorDetailsController extends Controller
{

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
    public function store(Request $request, QuoteAuthor $quoteauthor)
    {
        $this->validate($request, [
                'full_name' => 'required|min:10|max:255',
                'birth' => 'nullable|date',
                'death' => 'nullable|date|after:birth',
                'wikipedia' => 'nullable|min:4|max:100',
                'twitter' => 'nullable|min:4|max:100',
                'facebook' => 'nullable|min:4|max:100',
                'instagram' => 'nullable|min:4|max:100',
                'linkedin' => 'nullable|min:4|max:100',
                'intro' => 'nullable|min:10',
                'known_for' => 'nullable|min:10|max:255',
                'bio' => 'nullable|min:10',
                'quotes_summary' => 'nullable|min:10',
                'books_summary' => 'nullable|min:10'
            ]);

        $quoteauthor->addDetail($request);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
