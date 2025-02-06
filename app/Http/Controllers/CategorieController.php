<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Can;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return $categories;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = new Categorie(
            [
                'nomcategorie' => $request->input('nomcategorie'),
                'imagecategorie' => $request->input('imagecategorie')
            ]
        );
        $categorie->save();

        return response()->json('Catégorie créee !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categorie = Categorie::find($id);
        return response()->json($categorie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        $categorie->update($request->all());
        return response()->json('Catégorie mise à jour !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return response()->json('Catégorie supprimée !');
    }
}
