<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function create_product(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'product_name' => 'required|string',
            'product_description' => 'required|string',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the authenticated farmer
        $farmer = auth()->user(); // Assuming you have authentication set up

        // Create a new product instance
        $product = new Product();
        $product->product_name = $validatedData['product_name'];
        $product->product_description = $validatedData['product_description'];
        $product->quantity = $validatedData['quantity'];
        $product->farmer_id = $farmer->id;

        // Upload the product image
        $imagePath = $request->file('image')->store('product_images', 'public');
        $product->image = $imagePath;

        // Save the product to the database
        $product->save();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Product created successfully.');
    }



    public function view_products()
    {
        // Fetch all products using pagination
        $products = DB::table('products')
            ->join('farmers', 'products.farmer_id', '=', 'farmers.id')
            ->select('products.*', 'farmers.first_name', 'farmers.last_name')
            ->paginate(10);

        return view('products.index', ['products' => $products]);
    }



}
