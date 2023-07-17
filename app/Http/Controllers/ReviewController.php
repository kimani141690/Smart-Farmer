<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create()
    {
        return view('review');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'review_title' => 'required|string|max:255',
            'review_description' => 'required|string|max:5500',
        ]);

        $review = new Review();
        $review->customer_id = auth()->user()->id; // Assuming the authenticated user is the customer
        $review->review_title = $validatedData['review_title'];
        $review->review_description = $validatedData['review_description'];
        $review->save();

        // Optionally, you can redirect the user after saving the review
        return redirect()->route('reviews.create')->with('success', 'Review submitted successfully!');
    }


}
