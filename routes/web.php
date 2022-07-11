<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/show-profile', [HomeController::class, 'showProfile'])->name('show-profile');
Route::post('/update-profile', [HomeController::class, 'updateProfile'])->name('profile-store');
Route::post('/change-password', [HomeController::class, 'changePassword'])->name('profile-change-password');

Route::middleware('role:superadmin')->group(function () {
    Route::post('user/{user}/change-password/', [UserController::class, 'changePassword'])->name('user.change-password');
    Route::resource('user', UserController::class);
});
