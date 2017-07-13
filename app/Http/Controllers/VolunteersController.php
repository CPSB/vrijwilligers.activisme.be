<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolunteerValidator;
use App\Notifications\NewVolunteer;
use App\User;
use App\Volunteers;
use Illuminate\Http\Request;

class VolunteersController extends Controller
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
        $this->middleware('auth')->only(['index']);

        $this->volunteers = $volunteers;
        $this->users      = $users;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = $this->volunteers->paginate(25);
        return view('volunteers.index', compact('volunteers'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
