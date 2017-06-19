<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisclaimerController extends Controller
{
    /**
     * Disclaimer constrcutor
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('lang');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('disclaimer.index');
    }
}
