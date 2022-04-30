<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $productList = Product::all()->take(8);
        return view('pages.store.index')->with('products', $productList);
    }

    public function allProduct()
    {
        return view('pages.store.product');
    }
}
