<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('dashboard.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $store = new Categorie();
        $store->name = $request->name;
        $store->save();
        return redirect("/dashboard/category")->with(['success' => 'La catégorie à été correctement ajouté', 'error' => 'La catégorie n\'a pas été ajouté']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categorie::find($id);
        return view('dashboard.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $categorie->name = $request->name;
        $categorie->update();
        return redirect('/dashboard/category')->with(['success' => 'La catégorie à été correctement mis a jour', 'error' => 'La catégorie n\'a pas été mis a jour']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $images = Image::all();
        foreach ($images as $image) {
            if ($image->category_id == $categorie->id) {
                Storage::delete('storage/img/' . $image->fileName);
                $image->truncate();
            }
        }
        $categorie->delete();
        return redirect('/dashboard/category')->with(['success' => 'La catégorie à été correctement mis a jour', 'error' => 'La catégorie n\'a pas été mis a jour']);
    }
}
