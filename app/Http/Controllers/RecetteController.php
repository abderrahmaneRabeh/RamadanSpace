<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index()
    {

        $categories = Categorie::all();
        return view('AjouterRecette', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'id_category' => ['required', 'integer'],
            'image_url' => ['required', 'url'],
            'ingredients' => ['required', 'string'],
            'etapes' => ['required', 'string'],
        ]);

        // Retrieve input data
        $titre = $request->input('titre');
        $description = $request->input('description');
        $id_category = $request->input('id_category');
        $image_url = $request->input('image_url');
        $ingredients = $request->input('ingredients');
        $etapes = $request->input('etapes');
        $user_id = auth()->user()->id;

        // Create a new recette object
        $recette = Recette::create([
            'titre' => $titre,
            'description' => $description,
            'id_category' => $id_category,
            'image_url' => $image_url,
            'ingredients' => $ingredients,
            'etapes' => $etapes,
            'id_user' => $user_id,
        ]);

        if ($recette) {
            return redirect()->route('Recettes')->with('success', 'Recette ajoutée avec succès.');
        } else {
            echo "Une erreur s'est produite lors de l'ajout de la recette.";
        }

    }

    public function display($categoryId = null)
    {

        $query = Recette::with('user', 'categorie')->orderBy('created_at', 'desc');

        if ($categoryId) {
            $query->whereHas('categorie', function ($q) use ($categoryId) {
                $q->where('id_categorie', $categoryId);
            });
        }

        if ($categoryId) {

            $recettes = $query->paginate(3);
        } else {

            $recettes = $query->paginate(6);
        }
        $categories = Categorie::all();

        return view('Recettes', compact('recettes', 'categories', 'categoryId'));
    }

    public function showDetails($id)
    {
        $recette = Recette::with('user', 'categorie')->findOrFail($id);
        return view('recettesDetails', compact('recette'));
    }
}
