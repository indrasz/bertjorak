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
            if ($filter == 'Lowest-Price') {
                $productsQuery->orderBy('price');
            } else if($filter == 'Highest-Price') {
                $productsQuery->orderByDesc('price');
            } else if($filter == 'Newest') {
                $productsQuery->orderByDesc('created_at');
            } else if($filter == 'Popularity') {
                $productsQuery->orderByDesc('unggulan');
            } else {
                $products = Product::all();
            }
        }

        $products = $productsQuery->paginate(10)->appends(['sort' => request('sort')]);

        return view('livewire.product.product-list', compact('products'));


        // return view('livewire.product.product-list', [
        //     'products' => Product::where(function ($sub_query) {
        //         $sub_query->where('title', 'like', '%' . $this->search . '%');
        //     })->paginate(10)
        // ]);
    }
}