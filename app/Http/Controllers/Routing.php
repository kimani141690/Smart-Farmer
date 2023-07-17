<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        } elseif (request()->route()->named('farmer')) {

            return view('auth.signup', [
                'account_type' => 'Farmers',
            ]);

        } elseif (request()->route()->named('customer')) {

            return view('auth.signup', [
                'account_type' => 'Customers',
            ]);

        } elseif (request()->route()->named('farmer_details')) {

            return view('auth.user_details', [
                'account_type' => 'Farmers',
            ]);

        }  elseif (request()->route()->named('customer_details')) {

            return view('auth.user_details', [
                'account_type' => 'Customers',
            ]);

        }  elseif (request()->is('auth/reset')) {

            return view('auth.reset_password');

        } else {
            abort(404);
        }
    }

}
