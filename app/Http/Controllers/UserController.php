<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(UserDataTable $datatable)
    {
        $roleOption = Role::all()->pluck('name', 'id');
        return $datatable->render('user.index', compact('roleOption'));
    }
}
