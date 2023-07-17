<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmerController extends Controller
{


    public function show_profile()
    {
        // Get the authenticated user's profile
        // Get the authenticated user's farmer profile
        $user = auth()->user();
        $farmer = Farmer::find($user->farmer_id);

        return view('profile.show', ['user' => $user, 'farmer' => $farmer]);
    }


    public function update_profile(Request $request)
    {
        function update(Request $request)
        {
            // Validate the request data
            $validatedData = $request->validate([
                'username' => 'required|string',
                'email' => 'required|email',
                'location' => 'required|string',
                'address' => 'required|string',
                'contact' => 'required|string',
                'profile' => 'required|string|max:30',
            ]);

            // Get the authenticated user
            $user = auth()->user();

            // Get the farmer profile associated with the user
            $farmer = Farmer::find($user->farmer_id);

            // Update the user profile
            $user->username = $validatedData['username'];
            $user->email = $validatedData['email'];
            $user->save();

            // Update the farmer profile
            $farmer->location = $validatedData['location'];
            $farmer->address = $validatedData['address'];
            $farmer->phone_number = $validatedData['contact'];
            $farmer->profile = $validatedData['profile'];
            $farmer->save();
            // Redirect or return a response as needed
            return redirect()->back()->with('success', 'Profile updated successfully.');
        }


    }
}
