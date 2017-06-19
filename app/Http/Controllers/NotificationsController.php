<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notifications.index');
    }

    /**
     * Set one notifcation as read.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markOne()
    {
        return back(302);
    }

    /**
     * Mark one notification as read.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markAll()
    {
        if (auth()->user()->unreadNotifications->markAsRead()) {
            flash('All notifications as been read.')->success();
        }

        return back(302);
    }
}
