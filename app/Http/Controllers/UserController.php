<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Str;


class usercontroller extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();
        /*return $user->password;*/
        if (!$user || Hash::check($req->password, $user->password)) {
            return "Username or password doesn't match";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
    function register(Request $req)
    {
        //return $req->input();
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }

    public function google()
    {
        //sends user request to google
        return Socialite::driver('google')->redirect();
    }
    public function googleRedirect()
    {
        //get oauth request back from google to authenticate user
        $user = Socialite::driver('google')->user();
        dd($user);
    }
}
