<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;


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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

// Route::get('/login/google', 'App\Http\Controllers\UserController@google');
// Route::get('/login/google/redirect', 'App\Http\Controllers\UserController@googleRedirect');

Route::get('/login/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/login/google/redirect', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
});

Route::view('/register', 'register');
Route::post("/login", [UserController::class, 'login']);
Route::get("/", [ProductController::class, 'index']);
Route::post("/register", [UserController::class, 'register']);
