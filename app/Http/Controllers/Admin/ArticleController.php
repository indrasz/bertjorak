<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use File;
use Auth;

class ArticleController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $dataArticle = Article::all();

            return view('pages.dashboard.article.index')->with("article", $dataArticle);
        } else {
            return redirect()->back();
        }
    }

    public function create()
    {
        if (Auth::user()->hasRole('admin')) {
            return view('pages.dashboard.article.create');
        } else {
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        if (Auth::user()->hasRole('admin')) {
            $dataArticle = Article::where('id', '=', $id)->get();

            return view('pages.dashboard.article.edit')->with('articles', $dataArticle);
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->hasRole('admin')) {
            $editData = Article::where('id', $id)->first();

            // Image Article
            if ($request->hasfile('photos')) {
                // Delete Old Photos
                File::delete(storage_path() . '/app/public/articles/images/' . json_decode($editData->image, true));

                // Add new images
                $name = time() . rand(1, 100) . ' - ' . $request->photos->getClientOriginalName();
                $request->photos->storeAs('articles/images/', $name, 'public');
                $dataNewImage = $name;
            }

            // Logo Article
            if ($request->hasfile('logo')) {
                // Delete Old Photos
                File::delete(storage_path() . '/app/public/articles/logo/' . json_decode($editData->logo_header, true));

                // Add new images
                $nameLogo = time() . rand(1, 100) . ' - ' . $request->logo->getClientOriginalName();
                $request->logo->storeAs('articles/logo/', $nameLogo, 'public');
                $dataNewLogo = $nameLogo;
            }

            $articleUp = Article::find($id);

            if ($request->logo != null) {
                if ($dataNewLogo != null) {
                    $articleUp->logo_header = json_encode($dataNewLogo);
                }
            }
            $articleUp->title_header = $request->headline;
            if ($request->photos != null) {
                if ($dataNewImage != null) {
                    $articleUp->image = json_encode($dataNewImage);
                }
            }
            $articleUp->desc = $request->desc;

            if ($articleUp->save()) {
                return redirect()->route('dashboard.article.index')->withToastSuccess('Article Success edited!');
            } else {
                return redirect()->route('dashboard.article.index')->withToastError('Article failed edited!');
            }
        } else {
            return redirect()->back();
        }
    }

    public function show($id)
    {
        if (Auth::user()->hasRole('admin')) {
            $dataArticle = Article::where('id', '=', $id)->get();

            return view('pages.dashboard.article.show')->with('articles', $dataArticle);
        } else {
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()->hasRole('admin')) {
            if ($request->hasfile('logo')) {
                $nameLogo = time() . rand(1, 100) . ' - ' . $request->logo->getClientOriginalName();
                $request->logo->storeAs('articles/logo/', $nameLogo, 'public');
                $dataLogo = $nameLogo;
            }

            if ($request->hasfile('photos')) {
                $name = time() . rand(1, 100) . ' - ' . $request->photos->getClientOriginalName();
                $request->photos->storeAs('articles/images/', $name, 'public');
                $data = $name;
            }

            $file = new Article();
            if ($request->logo != null) {
                $file->logo_header = json_encode($dataLogo);
            } else {
                $file->logo_header = null;
            }
            $file->title_header = $request->headline;
            $file->image = json_encode($data);
            $file->desc = $request->desc;
            $file->header = "YES";

            if ($file->save()) {
                return redirect()->route('dashboard.article.index')->withToastSuccess('Article Created Successfully!');
            } else {
                return redirect()->back()->withToastError('Article failed Created');
            }
        } else {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        if (Auth::user()->hasRole('admin')) {
            $data = Article::findOrFail($id);

            $dataLogo = json_decode($data->logo_header, true);
            $dataImage = json_decode($data->image, true);

            // Delete Logo Header
            File::delete(storage_path() . '/app/public/articles/logo/' . $dataLogo);

            // Delete Image
            File::delete(storage_path() . '/app/public/articles/images/' . $dataImage);

            if ($data->delete()) {
                return redirect()->route('dashboard.article.index')->withToastSuccess('Article deleted successfully');
            } else {
                return redirect()->route('dashboard.article.index')->withToastError('Article failed delete');
            }
        } else {
            return redirect()->back();
        }
    }
}
