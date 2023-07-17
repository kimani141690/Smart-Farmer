<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

      public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');

        // Retrieve the authenticated user's ID
        $userId = Auth::id();

        // Add the item to the cart
        $cartItem = new Cart();
        $cartItem->product_id = $productId;
        $cartItem->buyer_id = $userId;
        $cartItem->save();

        // You can return the newly created cart item if necessary
        return response()->json($cartItem);
    }



}
