<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Article;
use Auth;
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

        if (Auth::user()) {
            if (Auth::user()->hasRole('admin')) {
                $count = Product::count();

                $data = Product::latest()->paginate(10);
                return view('pages.dashboard.product.index')->with('data', $data)->with('count', $count);

            }
        } else {
            return view('errors.404');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::where('id', '>', 1)
            ->get('nama_article');
        return view('pages.dashboard.product.create')->with('articles', $articles);
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
            'size_photos' => 'required',
            'size_photos.*' => 'mimes:png,jpg,jpeg',

            'name' => 'required|max:100',
            'price' => 'required',
            'desc' => 'required',
            'stock' => 'required',
            'nama_article' => 'required',
            // 'pilihan' => 'required',
            // 'size' => 'required',
            'weight' => 'required',
        ]);

        if ($request->hasfile('photos')) {
            foreach ($request->file('photos') as $image) {
                $name = time() . rand(1, 100) . ' - ' . $image->getClientOriginalName();
                $image->storeAs('products/images/', $name, 'public');
                $data[] = $name;
            }
        }

        if ($request->hasfile('size_photos')) {
            foreach ($request->file('size_photos') as $imageSize) {
                $nameSize = time() . rand(1, 100) . ' - ' . $imageSize->getClientOriginalName();
                $imageSize->storeAs('products/size_images/', $nameSize, 'public');
                $dataSize[] = $nameSize;
            }
        }


        $pilihanText[] = $request->pilihan;
        $sizeText[] = $request->size;

        $file = new Product();
        $file->images = json_encode($data);
        $file->size_charts = json_encode($dataSize);
        $file->nama_article = $request->nama_article;
        $file->title = $request->name;
        $file->price = $request->price;
        $file->desc = $request->desc;
        if (isset($request->unggulanCheck)) {
            $file->unggulan = $request->unggulanCheck;
        } else {
            $file->unggulan = null;
        }
        if (isset($request->latestArticleCheck)) {
            $file->latest_article = $request->latestArticleCheck;
        } else {
            $file->latest_article = null;
        }
        $file->stock = $request->stock;
        if ($pilihanText[0][0] != null) {
            $file->pilihan = json_encode($pilihanText);
        }
        if ($sizeText[0][0] != null) {
            $file->size = json_encode($sizeText);
        }
        $file->weight = $request->weight;

        if ($file->save()) {
            return redirect()->route('dashboard.product.index')->withToastSuccess('Product Created Successfully!');
        } else {
            return redirect()->back()->withToastError('Product failed Created');
        }
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
        $articles = Article::where('id', '>', 1)
            ->get('nama_article');
        return view('pages.dashboard.product.edit')->with('articles', $articles)->with('editData', $editData);
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
            'photos.*' => 'mimes:png,jpg,jpeg',
            'size_photos.*' => 'mimes:png,jpg,jpeg',

            'name' => 'required|max:100',
            'price' => 'required',
            'desc' => 'required',
            'stock' => 'required',
            'size' => 'required',
            'nama_article' => 'required',
            'weight' => 'required',
        ]);


        $editData = Product::where('id_product', $id)->get();


        if ($request->hasfile('photos')) {
            // Delete Old Photos
            foreach ($editData as $key) {
                $imageArr = json_decode($key->images, true);
                $files = array($imageArr);
                foreach ($files as $image) {
                    for ($i = 0; $i < count($image); $i++) {
                        File::delete(storage_path() . '/app/public/products/images/' . $image[$i]);
                    }
                }
            }

            // Add new images
            foreach ($request->photos as $image) {
                ///dd($image);
                $name = time() . rand(1, 100) . ' - ' . $image->getClientOriginalName();
                $image->storeAs('products/images/', $name, 'public');
                $dataNewImages[] = $name;
            }
        }

        $dataNewSize = []; // Declare an empty array

        if ($request->hasfile('size_photos')) {
            // Delete Old Photos
            foreach ($editData as $key) {
                $imageSz = json_decode($key->size_charts, true);
                $files = array($imageSz);
                foreach ($files as $imageSize) {
                    for ($i = 0; $i < count($imageSize); $i++) {
                        File::delete(storage_path() . '/app/public/products/size_images/' . $imageSize[$i]);
                    }
                }
            }

            // Add new images
            foreach ($request->size_photos as $imageSize) {
                $nameSize = time() . rand(1, 100) . ' - ' . $imageSize->getClientOriginalName();
                $imageSize->storeAs('products/size_images/', $nameSize, 'public');
                $dataNewSize[] = $nameSize;
            }
        }



        $imageInput[] = $request->photos;
        $pilihanText[] = $request->pilihan;
        $sizeText[] = $request->size;

        $productUp = Product::find($id);

        if ($imageInput[0] != null) {
            $productUp->images = json_encode($dataNewImages);
        }
        if ($imageInput[0] != null) {
            $productUp->size_charts = json_encode($dataNewSize);
        }
        $productUp->title = $request->name;
        $productUp->price = $request->price;
        $productUp->nama_article = $request->nama_article;
        $productUp->desc = $request->desc;
        if (isset($request->unggulanCheck)) {
            $productUp->unggulan = $request->unggulanCheck;
        } else {
            $productUp->unggulan = null;
        }
        if (isset($request->latestArticleCheck)) {
            $productUp->latest_article = $request->latestArticleCheck;
        } else {
            $productUp->latest_article = null;
        }
        $productUp->stock = $request->stock;
        if ($pilihanText[0][0] != null) {
            $productUp->pilihan = json_encode($pilihanText);
        }
        if ($sizeText[0][0] != null) {
            $productUp->size = json_encode($sizeText);
        }
        $productUp->weight = $request->weight;

        if ($productUp->save()) {
            return redirect()->route('dashboard.product.index')->withToastSuccess('Product Success edited!');
        } else {
            return redirect()->route('dashboard.product.index')->withToastError('Product failed edited!');
        }
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

        foreach (json_decode($data->size_charts, true) as $imageSize => $value) {
            File::delete(storage_path() . '/app/public/products/size_images/' . $value);
        }

        if ($data->delete()) {
            return redirect()->route('dashboard.product.index')->withToastSuccess('Product deleted successfully');
        } else {
            return redirect()->route('dashboard.product.index')->withToastError('Product failed delete');
        }
    }
}