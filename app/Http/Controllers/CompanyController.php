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
        $this->middleware('auth')->except(['index', 'show', 'advertising', 'contact', 'privacy', 'terms']);
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
    public function advertising()
    {
        return view('company.advertising');
    }

    /**
     * Show the company contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('company.contact');
    }

    /**
     * Show the company privacy policy page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        return view('company.privacy');
    }

    /**
     * Show the company terms of use policy page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('company.terms');
    }

}