<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolunteerValidator;
use App\Notifications\NewVolunteer;
use App\User;
use App\Volunteers;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    private $volunteers; /** @var Volunteers    $volunteers The database model for the volunteers. */
    private $users;      /** @var Users         $users      The database model for the users.      */

    /**
     * Volunteer constructor.
     *
     * @param Volunteers $volunteers
     * @param User $users
     */
    public function __construct(Volunteers $volunteers, User $users)
    {
        $this->middleware('lang');

        $this->volunteers = $volunteers;
        $this->users      = $users;
    }

    /**
     * Store the new volunteer in the database.
     *
     * @param  VolunteerValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(VolunteerValidator $input)
    {
        if ($this->volunteers->create($input->except(['_token']))) {
            // Create flash data
            session()->flash('strong_msg', 'Bedankt!');
            session()->flash('message',    'Voor je intresse, we nemen spoedig contact met je op!');
            session()->flash('class',      'alert-success');
            session()->flash('icon',       'now-ui-icons ui-2_like');

            $users = $this->users->role('Admin')->get();

            foreach ($users as $user) {
                $user->notify((new NewVolunteer($input)));
            }
        }

        return back(302);
    }
}
