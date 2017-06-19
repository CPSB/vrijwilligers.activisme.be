<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use App\Notifications\ContactMessage;
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
        if ($mail = Contact::create($input->except('_token'))) {
            $users = User::role('Admin')->get();

            foreach ($users as $user) {
                $user->notify((new ContactMessage($mail)));
            }

            flash(trans('contact.contact-store'));
        }

        return back(302);
    }
}
