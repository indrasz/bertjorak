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

        $imgFirst = Product::select('images')->first()->get();

        return view('pages.dashboard.product.index')->with('count', $count)->with('data', $data)->with('firstImg', $imgFirst);
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
                $name = time() . rand(1, 100) . $image->getClientOriginalName();
                $image->move(public_path() . '/dashboard_assets/products/images/', $name);
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
    public function show($id)
    {
        $count = Product::count();

        $data = Product::all();

        $imgFirst = Product::select('images')->first()->get();

        $size = json_decode(Product::select('images')->get());

        return view('pages.detail')->with('count', $count)->with('data', $data)->with('firstImg', $imgFirst)->with('size', $size);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editData = Product::where('id', $id)->get();

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

        $dataUpdate = Product::findOrFail($id);

        $dataUpdate->update([
            'title' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'stock' => $request->stock,
            'size' => $request->size,
            'weight' => $request->weight,
        ]);

        return redirect()->route('dashboard.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);

        // $files->images = json_decode($data->images);

        // unlink(public_path('dashboard_assets/products/images/' . $files));

        $data->delete();

        return redirect()->route('dashboard.product.index');
    }
}
