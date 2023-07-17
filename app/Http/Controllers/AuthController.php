<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationMail;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //
    public function registration(Request $request)
    {
//        $data = $request->all();
        $existingRegistration = User::where('account_status',$request->input('email'));

        if (!$existingRegistration){
            $newUser = new User();
            $newPassword = new PasswordReset();
            $newUser->role = $request->input('role');
            $newUser->email = $request->input('email');
            $newUser->password = Hash::make("smart_farmer_123");

            $token = str::random(60);
            $newUser->save();

            Mail::to($request->input('email'))->send(new RegistrationMail());
        }
    }
}
