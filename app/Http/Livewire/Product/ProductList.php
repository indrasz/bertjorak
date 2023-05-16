<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductList extends Component
{
    public $search;

    public function render()
    {
        $productsQuery = Product::where(function ($sub_query) {
            $sub_query->where('title', 'like', '%' . $this->search . '%');
        });

        if (request()->has('sort')) {
            $filter = request('sort');
            if ($filter == 'price_asc') {
                $productsQuery->orderBy('price');
            } else if($filter == 'price_desc') {
                $productsQuery->orderByDesc('price');
            } else if($filter == 'newest') {
                $productsQuery->orderByDesc('created_at');
            } else if($filter == 'popularity') {
                $productsQuery->orderByDesc('unggulan');
            } else {
                $products = Product::all();
            }
        }

        $products = $productsQuery->paginate(10);

        return view('livewire.product.product-list', compact('products'));


        // return view('livewire.product.product-list', [
        //     'products' => Product::where(function ($sub_query) {
        //         $sub_query->where('title', 'like', '%' . $this->search . '%');
        //     })->paginate(10)
        // ]);
    }
}