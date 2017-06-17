<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AccountSettingsController extends Controller
{
    /**
     * Account Settings constructor 
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); 
        $this->middleware('lang');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('auth.settings', compact('user')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateInfo(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        if (User::findOrFail(auth()->user()->id)->update($request->all())) {
            flash(trans('profile-settings.flash-info'))->success();
        }

        return back(302);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function updateSecurity(Request $request) 
    {
        $this->validate($request, ['password' => 'required|string|min:6|confirmed']); 

        if (User::findOrFail(auth()->user()->id)->update($request->all())) {
            flash(trans('profile-settings.flash-password'))->success();
        }

        return back(302); 
    }
}