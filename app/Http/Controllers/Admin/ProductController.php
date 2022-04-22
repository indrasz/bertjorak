<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Product::count();

        $data = Product::all();

        return view('pages.dashboard.product.index')->with('count', $count)->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photos' => 'required',
            'photos.*' => 'mimes:png,jpg,jpeg',

            'name' => 'required|max:100',
            'price' => 'required',
            'desc' => 'required',
            'stock' => 'required',
            'size' => 'required',
            'weight' => 'required',
        ]);

        if ($request->hasfile('photos')) {
            foreach ($request->file('photos') as $image) {
                $name = time() . rand(1, 100) . ' - ' . $image->getClientOriginalName();
                $image->storeAs('products/images/', $name, 'public');
                $data[] = $name;
            }
        }

        $sizeText[] = $request->size;

        $file = new Product();
        $file->images = json_encode($data);
        $file->title = $request->name;
        $file->price = $request->price;
        $file->desc = $request->desc;
        $file->stock = $request->stock;
        $file->size = json_encode($sizeText);
        $file->weight = $request->weight;

        $file->save();

        return redirect()->route('dashboard.product.index')->with('success', 'Data Your files has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editData = Product::where('id_product', $id)->get();

        return view('pages.dashboard.product.edit')->with('editData', $editData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Product::findOrFail($id);

        $this->validate($request, [
            'photos' => 'required',
            'photos.*' => 'mimes:png,jpg,jpeg',

            'name' => 'required|max:100',
            'price' => 'required',
            'desc' => 'required',
            'stock' => 'required',
            'size' => 'required',
            'weight' => 'required',
        ]);

        // if ($request->hasfile('photos')) {
        //     foreach ($request->file('photos') as $image) {
        //         $name = time() . rand(1, 100) . ' - ' . $image->getClientOriginalName();
        //         $image->storeAs('products/images/', $name, 'public');
        //         $data[] = $name;
        //     }
        // }

        $productUp = Product::find($id);

        // $productUp->images = json_encode($data);
        $productUp->title = $request->name;
        $productUp->price = $request->price;
        $productUp->desc = $request->desc;
        $productUp->stock = $request->stock;
        $productUp->size = $request->size;
        $productUp->weight = $request->weight;

        $productUp->save();

        // Delete Multiple Images From Public Folder
        foreach (json_decode($data->images, true) as $image => $value) {
            File::delete('storage/products/images/' . $value);
        }

        return redirect()->route('dashboard.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = Product::findOrFail($id);

        foreach (json_decode($data->images, true) as $image => $value) {
            File::delete(storage_path() . '/app/public/products/images/' . $value);
        }

        $data->delete();

        return redirect()->route('dashboard.product.index');
    }
}
