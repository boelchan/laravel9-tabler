<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function showProfile()
    {
        $user = auth()->user();
        return view('auth.show-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);

        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->name = ucwords(strtolower($request->name));
        $user->email = $request->email;
        $user->save();

        return redirect()->route('show-profile')->with('message', 'Ubah Data Berhasil');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password_old' => new MatchOldPassword,
            'password' => 'required',
            'password_confirmation' => 'same:password',
        ]);

        $user = User::findOrFail(auth()->user()->id);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('show-profile')->with('message', 'Ubah Password Berhasil');
    }
}
