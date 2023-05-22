<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Article;
use Request;

class HomeController extends Controller
{
    public function index()
    {
        // Article
        $articleList = Article::all();

        // Product List
        $products = Product::all();


        return view('pages.store.index')->with('products', $products)->with('articles', $articleList);
    }

    public function allProduct()
    {

        // if(Request::get('sort') == 'price_asc') {
        //     return $products = Product::orderBy('price')->get();     
        // } elseif(Request::get('sort') == 'price_desc') {
        //     $products = Product::orderByDesc('price')->get(); 
        // } elseif(Request::get('sort') == 'newest') {
        //     $products = Product::orderByDesc('created_at')->get(); 
        // } elseif(Request::get('sort') == 'popularity') {
        //     $products = Product::orderByDesc('unggulan')->get(); 
        // }   else {
        //     $products = Product::all();
        // }
        $products = Product::all();
        return view('pages.store.product')->with('products', $products);
        
    }
}

// 1

// if(Request::get('sort') == 'price_asc') {
//     $products = Product::orderBy('price','asc');    
// } elseif(Request::get('sort') == 'price_desc') {
//     $products = Product::orderBy('price','desc'); 
// } elseif(Request::get('sort') == 'newest') {
//     $products = Product::orderBy('created_at','desc'); 
// } elseif(Request::get('sort') == 'popularity') {
//     $products = Product::orderBy('unggulan','desc'); 
// } else {
//     $products = Product::all();
// }

// return view('pages.store.product')->with('products', $products);

// 2

