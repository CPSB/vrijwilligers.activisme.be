<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolunteerValidator;
use App\Notifications\NewVolunteer;
use App\User;
use App\VolunteerGroups;
use App\Volunteers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class VolunteersController extends Controller
{
    private $volunteers; /** @var Volunteers        $volunteers The database model for the volunteers.          */
    private $users;      /** @var User              $users      The database model for the users.               */
    private $groups;     /** @var VolunteerGroups   $groups     The database model for the volunteer groups.    */

    /**
     * Volunteer constructor.
     *
     * @param Volunteers $volunteers
     * @param User $users
     * @param VolunteerGroups $groups
     */
    public function __construct(Volunteers $volunteers, User $users, VolunteerGroups $groups)
    {
        $this->middleware('lang');
        $this->middleware('auth')->only(['index']);
        $this->middleware('auth')->only(['index']);
        $this->middleware('role:Admin')->only(['index']);

        $this->volunteers = $volunteers;
        $this->users      = $users;
        $this->groups     = $groups;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = $this->volunteers->with(['volunteerGroups'])->paginate(25);
        $groups     = $this->groups->all();

        return view('volunteers.index', compact('volunteers', 'groups'));
    }

    /**
     * Store the new volunteer in the database.
     *
     * @param  VolunteerValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(VolunteerValidator $input)
    {
        if ($volunteer = $this->volunteers->create($input->except(['_token', 'groups']))) {

            // Create flash data
            session()->flash('strong_msg', 'Bedankt!');
            session()->flash('message',    'Voor je intresse, we nemen spoedig contact met je op!');
            session()->flash('class',      'alert-success');
            session()->flash('icon',       'now-ui-icons ui-2_like');

            $users = $this->users->role('Admin')->get();

            foreach ($users as $user) {
                $user->notify((new NewVolunteer($input)));
            }

            if (! is_null($input->get('groups'))) {
                $volunteer->volunteerGroups()->sync($input->get('groups'));
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
        try {
            $volunteer = $this->volunteers->findOrFail($id);
            return view('volunteers.show', compact('volunteer'));
        } catch (ModelNotFoundException $exception) {
            return app()->abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $volunteer  = $this->volunteers->with(['volunteerGroups'])->findOrFail($id);
            $groups     = $this->groups->get(['id', 'name']);

            return view('volunteers.edit', compact('volunteer', 'groups'));
        } catch (ModelNotFoundException $exception) {
            return app()->abort(302);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  VolunteerValidator $input    The given user input validation instance.
     * @param  integer            $id       The volunteer id in the database.
     * @return \Illuminate\Http\Response
     */
    public function update(VolunteerValidator $input, $id)
    {
        try { // Try to find the volunteer in the system. Based on his id.
            $volunteer = $this->volunteers->findOrFail($input);

            if ($volunteer->update($input->except(['_token', 'groups']))) {
                if (! is_null($input->groups)) {
                    $volunteer->volunteerGroups()->sync($input->groups);
                }

                flash('De vrijwilliger is successvol aangepast in het systeem.')->success();
            }

            return back();
        } catch (ModelNotFoundException $exception) {
            return app()->abort(404); // Volunteer not found. So throw a 404 HTTP CODE.
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $volunteer = $this->volunteers->findOrFail($id);

            if ($volunteer->delete()) { // Volunteer has been deleted.
                flash('De vrijwilliger is verwijderd.')->success();
                $volunteer->volunteerGroups()->sync([]);
            }

            return redirect()->route('volunteers.index');
        } catch (ModelNotFoundException $exception) {
            return app()->abort(404);
        }
    }
}
