<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupValidator;
use App\Http\Requests\VolunteerValidator;
use App\VolunteerGroups;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

/**
 * Class GroupsController
 *
 * @package App\Http\Controllers
 */
class GroupsController extends Controller
{
    private $groups; /** @var VolunteerGroups */

    /**
     * GroupsController constructor.
     *
     * @param VolunteerGroups $groups
     */
    public function __construct(VolunteerGroups $groups)
    {
        $this->middleware('lang');
        $this->middleware('auth');

        $this->groups = $groups;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = $this->groups->with(['volunteers'])->paginate(15);
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GroupValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(GroupValidator $input)
    {
        if ($group = $this->groups->create($input->all())) {
            flash('De vrijwilligers groep is aangemaakt.')->success();
        }

        return redirect()->route('groups.show', $group);
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
            $group = $this->groups->with(['volunteers'])->findOrFail($id);

            return view('groups.show', compact('group'));
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
            $group = $this->groups->findOrFail($id);

            return view('groups.edit', compact('group'));
        } catch (ModelNotFoundException $exception) {
            flash('De groep die u wilt bewerken kan niet worden gevonden.')->warning();
            return back(302);
        }
    }

    /**
     * Disconnect a volunteer from the volunteers group.
     *
     * @param  integer $group     The id from the volunteers group in the database.
     * @param  integer $volunteer The id from the volunteer in the database.
     * @return mixed
     */
    public function disconnect($group, $volunteer)
    {
        try {
            $group = $this->groups->findOrFail($group);
            $group->volunteers()->detach($volunteer);

            flash('De vrijwilliger is ontkoppeld van ' . $group->name);
            return back(302);
        } catch (ModelNotFoundException $exception) {
            return app()->abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  VolunteerValidator $input
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(VolunteerValidator $input, $id)
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
