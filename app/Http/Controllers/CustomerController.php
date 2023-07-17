<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{

       public function show_profile()
    {
        // Get the authenticated user's customer profile
        $user = auth()->user();
        $customer = Customer::find($user->customer_id);

        return view('profile.show', ['user' => $user, 'customer' => $customer]);
    }


    public function update_profile(Request $request)
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

        // Get the customer profile associated with the user
        $customer = Customer::find($user->customer_id);

        // Update the user profile
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->save();

        // Update the customer profile
        $customer->location = $validatedData['location'];
        $customer->address = $validatedData['address'];
        $customer->phone_number = $validatedData['contact'];
        $customer->profile = $validatedData['profile'];
        $customer->save();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }



}
