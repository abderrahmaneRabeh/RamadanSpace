<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function store(Request $request)
    {
        $commentaire = $request->input('commentaire');
        $publication_id = $request->input('publication_id');
        $user_id = auth()->user()->id;

        $commentaire = Commentaire::create([
            'contenu' => $commentaire,
            'id_pub' => $publication_id,
            'id_user' => $user_id,
            'date_creation' => date('Y-m-d'),
        ]);

        if ($commentaire) {
            return redirect()->back()->with('success', 'Commentaire ajouté avec succès.');
        } else {
            echo "Une erreur s'est produite lors de l'ajout du commentaire.";
        }
    }
}
