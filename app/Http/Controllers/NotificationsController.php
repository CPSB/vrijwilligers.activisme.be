<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
     * @param  string $notificationId The id in the database for the notification.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markOne($notificationId)
    {
        try {
            $notification = DatabaseNotification::findOrFail($notificationId);

            if ($notification->update(['read_at' => Carbon::now()])) {
                flash('The notification has been read.');
            }

            return back(302);
        } catch (ModelNotFoundException $modelNotFoundException) {
            flash('We copuld not mark the notification with an read status')->error();
            return back(302);
        }
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
