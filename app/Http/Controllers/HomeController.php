<?php

namespace App\Http\Controllers;

use App\DataTables\AuthenticationLogDataTable;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function showProfile(AuthenticationLogDataTable $authenticationLogDataTable)
    {
        $user = auth()->user();
        return $authenticationLogDataTable->render('auth.show-profile', compact('user'));
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
        $validator = Validator::make($request->all(), [
            'password_old' => new MatchOldPassword,
            'password' => 'required',
            'password_confirmation' => 'same:password',
        ]);

        if ($validator->fails()) return redirect('show-profile#tabs-password')->withErrors($validator)->withInput();

        $user = User::findOrFail(auth()->user()->id);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('show-profile#tabs-password')->with('message', 'Ubah Password Berhasil');
    }
}
