<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;
use App\Traits\Authorizable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    use Authorizable;

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
        $roles       = Role::all();
        $permissions = Permission::all();

        return view('role.index', compact('roles', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|unique:roles']);

        if (Role::create($request->only('name'))) {
            flash('Role added.');
        }

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($role = Role::findOrFail($id)) {
            if ($role->name === 'Admin') {  // admin role has everything
                $role->syncPermissions(Permission::all());
                return redirect()->route('roles.index');
            }

            $permissions = $request->get('permissions', []);
            $role->syncPermissions($permissions);
            flash( $role->name . ' permissions has been updated.');
        } else {
            flash()->error( 'Role with id '. $id .' note found.');
        }

        return redirect()->route('roles.index');
    }

    /**
     * Delete a permission group in the database.
     * sss
     * @param  integer $roleId the permission group in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($roleId)
    {
        try {
            $role = Role::findOrFail($roleId);
            $role->syncPermissions([]);
            $role->delete();

            flash('We have deleted the permission group');
            return redirect()->route('roles.index');
        } catch (ModelNotFoundException $modelNotFoundException) {
            flash('We could not delete the permission group.')->error();
            return redirect()->route('roles.index');
        }
    }
}
