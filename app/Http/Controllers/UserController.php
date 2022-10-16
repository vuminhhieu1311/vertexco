<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function updateLanguage($lang)
    {
        Auth::user()->update([
            'lang' => $lang,
        ]);

        return redirect()->back();
    }

    public function index()
    {
        $users = User::latest()->get();
        $roles = Role::latest()->get();

        return view('user.index', compact('users', 'roles'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $user->syncRoles($request->role);

        return redirect()->route('users.index')
            ->with('success', __('messages.successfully'));
    }
}
