<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function customer_order_history()
    {
        // Retrieve the authenticated user's ID
        $userId = Auth::id();

        // Retrieve the order history for the user
        $orderHistory = Order::whereHas('cart', function ($query) use ($userId) {
            $query->where('buyer_id', $userId);
        })->get();

        return view('order_history', ['orderHistory' => $orderHistory]);
    }




    public function farmerOrderHistory()
    {
        // Retrieve the authenticated user's ID
        $farmerId = Auth::id();

        // Retrieve the order history for the farmer
        $orders = Order::whereHas('cart', function ($query) use ($farmerId) {
            $query->where('seller_id', $farmerId);
        })->get();

        return view('farmer_order_history', ['orders' => $orders]);
    }


}
