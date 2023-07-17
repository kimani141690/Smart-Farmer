<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $userRecord = User::findOrFail('email', $user->email);

            if ($userRecord) {
                $userRecord->google_id = $user->id;
                $userRecord->google_token = $user->token;
                $userRecord->save();
                return app('App\Http\Controllers\AuthController')->login(Request::create('/auth/login/', 'POST', [
                    'google_id' => $user->id,
                ]));
            } else {
                return redirect()->intended('/auth/registration');
            }

        } catch (\Exception $exception) {
            return redirect('/auth/google/');
        }
    }
}
