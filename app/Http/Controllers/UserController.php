<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req) {
        $user = User::where(['email'=>$req->email])->first();
        if ($user && Hash::check($req->password, $user->password )) {

            $req->session()->put('user', $user);
            return redirect('/');

        } else {
            return "Username or Password do not match";
        }
    }

        function register (Request $req) {
            $user = new User;
            $user->name = $req->username;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->save();
//             return $req->input();
            return redirect('/login');

        }
}
