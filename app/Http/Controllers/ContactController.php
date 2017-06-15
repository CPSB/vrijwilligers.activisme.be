<?php

namespace App\Http\Controllers;

use App\Contact; 
use App\Http\Requests\ContactValidator;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
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
        return view('contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ContactValidator  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactValidator $input)
    {
        if (Contact::store($input->except('_token'))) {
            flash(trans('contact.contact-store'));
        }

        return back(302);
    }
}
