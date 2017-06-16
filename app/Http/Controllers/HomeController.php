<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['backend']);
        $this->middleware('lang');
    }

    /**
     * The application front-page.
     *
     * @return void
     */
    public function index()
    {
        return view('welcome'); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function backend()
    {
        return view('home');
    }
}
