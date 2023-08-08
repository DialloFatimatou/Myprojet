<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function savecategories(Request $request)
    {
        $categories = new Categories();
        $categories->nom_categories = $request->input('nom_category');
        $categories->save();
    
        return back()->with('status', 'Votre catégorie a été créée avec succès');
    }

     //update categories
     public function editCat($id, Request $request){
        $categorie = categories::find($id);
   }

   public function updateCat($id, Request $request){
        $categorie = categories::find($id);
        $categorie->libelle_categorie = $request->input('libelle_categorie');

        $categorie->update();
        return back()->with("status", "Votre catégorie a été  modifiée avec succés");
   }

   public function delete($id){
        $categories = Categories::find($id);
        $categories->delete();

        return back()->with("status", "Votre catégorie a été  supprimée avec succés");
   }
}
