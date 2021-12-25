<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('shop.index' , compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        // dd($product);
        return view('shop.show' , compact('product'));
    }
}
