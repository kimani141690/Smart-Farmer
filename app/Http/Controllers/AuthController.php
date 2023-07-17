<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationMail;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $user_confirmation = User::where('email', $request->input('email'))
            ->orWhere('google_id', $request->input('google_id'))
            ->first();

        if ($user_confirmation->farmer_id || $user_confirmation->customer_id) {

            $credentials = $request->only('email', 'password');
            $googleId = $request->input('google_id');

            if ($credentials) {
                if (Auth::attempt($credentials)) {
                    $user = Auth::user();
                    DB::table('users')->where('id', $user->id)->update(['last_login' => now()]);
                    $user_role = DB::table('users')->where('id', $user->id)->get('role')->first()->role;

                    if ($user_role == "Admin") {

                    } elseif ($user_role == "Farmer") {

                    } elseif ($user_role == "Customer") {

                    }
                }
            } elseif ($googleId) {
                $google_user = User::where('google_id', $googleId)->first();

                if ($google_user) {

                    Auth::login($google_user);
                    DB::table('users')->where('id', $google_user->id)->update(['last_login' => now()]);
                    $user_role = DB::table('users')->where('id', $google_user->id)->get('role')->first()->role;

                    if ($user_role == "Admin") {

                    } elseif ($user_role == "Farmer") {

                    } elseif ($user_role == "Customer") {

                    }
                }
            }

        } else {
            $role = $user_confirmation->role;
            if ($role == "Farmer") {
                return redirect()
                    ->route('farmer_details')
                    ->withErrors(['error' => 'You need to provide further details for your account']);

            } elseif ($role == "Customer") {

                return redirect()
                    ->route('customer_details')
                    ->withErrors(['error' => 'You need to provide further details for your account']);

            }
        }
    }

    public function registration(Request $request)
    {
        $emailRecord = $request->input('email');
        $existingRegistration = User::findOrFail($emailRecord);

//        dd($existingRegistration);

        if (!$existingRegistration) {
            $newUser = new User();
            $firstPasswordReset = new PasswordReset();

            $token = str::random(60);
            $password = Hash::make("smart_farmer_123");
            $email = $request->input('email');
            $username = $request->input('username');

            $emailContent = new Collection();

            $newUser->role = $request->input('type');
            $newUser->name = $username;
            $newUser->email = $email;
            $newUser->password = $password;
            $newUser->save();

            $lastID = DB::getPdo()->lastInsertId();
            $firstPasswordReset->user_id = $lastID;
            $firstPasswordReset->token = $token;
            $firstPasswordReset->save();

            $emailContent->push($email, $username, $password, $token);

            Mail::to($request->input('email'))->send(new RegistrationMail($emailContent, $request->input('type')));
        } else {
            return redirect()->route('login');
        }
    }

//    public function createUser
}
