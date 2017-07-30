<?php

namespace App\Http\Controllers;

use App\Graphic;
use Illuminate\Http\Request;

class GraphicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $graphic = Graphic::create([
            'name' => $name,
            'path' => $path,
            'mime' => 'jpg',
            'width' => 1080,
            'height' => 1080,
            'background_color' => 
            'image_type_id' => 4,
            'graphicable_type' => 'App/Quote',
            'graphicable_id' => 
            'headshot_id' => NULL,
            'created_by' => auth()->id(),
            'updated_by' => auth()->id()
        ]);

        QuoteSubmission::find(request('id'))->delete();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Graphic  $graphic
     * @return \Illuminate\Http\Response
     */
    public function show(Graphic $graphic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Graphic  $graphic
     * @return \Illuminate\Http\Response
     */
    public function edit(Graphic $graphic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Graphic  $graphic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Graphic $graphic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Graphic  $graphic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graphic $graphic)
    {
        //
    }
}
