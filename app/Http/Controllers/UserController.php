<?php

namespace App\Http\Controllers;

use App\DataTables\AuthenticationLogDataTable;
use App\DataTables\UserDataTable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(UserDataTable $datatable)
    {
        $roleOption = ['' => 'Semua'] + Role::orderBy('name')->pluck('name', 'id')->all();

        return $datatable->render('user.index', compact('roleOption'));
    }

    public function create()
    {
        $roleOption = Role::orderBy('name')->pluck('name', 'id')->all();

        return view('user.create', compact('roleOption'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
            'role' => 'required',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users',
        ]);

        User::create([
            'name' => ucwords(strtolower($request->name)),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
        ]);

        return redirect()->route('user.index');
    }

    public function show(User $user, AuthenticationLogDataTable $authenticationLogDataTable)
    {
        return $authenticationLogDataTable->render('user.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roleOption = Role::orderBy('name')->pluck('name', 'id')->all();

        return view('user.edit', compact('user', 'roleOption'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|max:30',
            'role' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        $user->name = ucwords(strtolower($request->name));
        $user->email = $request->email;
        $user->save();

        return redirect()->route('user.index');
    }

    public function changePassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    {
        if ($user->delete()) {
            return response()->json(['success' => true]);
        }

        return response()->json(['message' => 'Data sedang digunakan'], 400);
    }
}
