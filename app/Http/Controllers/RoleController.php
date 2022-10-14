<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        $roles = Role::latest()->with('permissions')->get();

        foreach ($roles as $role) {
            $role->permissionNames = $role->getPermissionNames();
        }

        return view('roles.index', compact('roles', 'permissions'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $role = Role::create([
                'name' => $request->name,
            ]);
            $role->givePermissionTo($request->permissions);

            DB::commit();

            return redirect()->route('roles.index')
                ->with('success', __('messages.successfully'));
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    public function update(Request $request, Role $role)
    {
        try {
            DB::beginTransaction();

            $role->update([
                'name' => $request->name,
            ]);
            $role->syncPermissions($request->permissions);

            DB::commit();

            return redirect()->route('roles.index')
                ->with('success', __('messages.successfully'));
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
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
        //
    }
}
