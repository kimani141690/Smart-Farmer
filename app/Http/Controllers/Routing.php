<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routing extends Controller
{
    //
    public function showIndex()
    {
        return view('index');
    }

    public function accounts()
    {
        if (request()->is('auth/login')) {
            $user = Auth::user();
            if ($user == null) {
                return view('auth.login');
            }
            return redirect("/")->withErrors(['error' => "You are already logged in"]);

        } elseif (request()->is('auth/registration')) {

            return view('auth.registration');

        } elseif (request()->is('auth/reset')) {

            return view('auth.reset_request');

        } else {
            abort(404);
        }
    }

}
