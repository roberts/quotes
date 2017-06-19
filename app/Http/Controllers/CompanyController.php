<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['main', 'index', 'show']);
    }

    /**
     * Show the company about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.index');
    }

    /**
     * Show the company staff page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('company.show');
    }

    /**
     * Show the company advertising page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.advertising');
    }

    /**
     * Show the company contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('company.contact');
    }

}