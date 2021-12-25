<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cart()
    {
        // dd(session('cartItems'));

        return view('cart.index');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cartItems = session()->get('cartItems' , []);

        if(isset($cartItems[$id]))
        {
            $cartItems[$id]['quantity']++;
        }
        else 
        {
            $cartItems [$id] = [
                "image_path" => $product -> image_path,
                "name" => $product -> name,
                "brand" => $product -> brand,
                "details" => $product -> details,
                "price" => $product -> price,
                "description" => $product -> description ,
                "quantity" => 1

            ];
        }

        session()->put('cartItems' , $cartItems);
        return redirect()->back()->with('success' , 'Product Added To Cart !');
    }

    public function delete(Request $request)
    {
        if($request -> id)
        {
            $cartItems = session()->get('cartItems');

            if(isset($cartItems[$request->id]))
            {
                unset($cartItems[$request->id]);
                session()->put('cartItems' , $cartItems);
            }
            return redirect()->back()->with('success' , 'Product Deleted Successfully');
        }
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cartItems = session()->get('cartItems');
            $cartItems[$request->id]["quantity"] = $request->quantity;
            session()->put('cartItems', $cartItems);
        }

        return redirect()->back()->with('success', 'Product added to cart!');
    }
}
