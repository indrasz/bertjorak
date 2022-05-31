<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $productList = Product::where('unggulan', '=', '1')->get();
        return view('pages.store.index')->with('products', $productList);
    }

    public function allProduct()
    {
        $products = Product::all();
        return view('pages.store.product')->with('products', $products);
    }
}
