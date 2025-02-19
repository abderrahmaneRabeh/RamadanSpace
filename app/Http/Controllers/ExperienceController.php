<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Publication;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{

    public function display()
    {
        $publications = Publication::with('user')->paginate(3);
        return view('Experiences', compact('publications'));
    }

    public function showDetails($id)
    {
        $publication = Publication::with('user')->findOrFail($id);
        $commentaires = Commentaire::where('id_pub', $id)->orderBy('created_at', 'desc')->get();
        return view('experienceDetails', compact('publication', 'commentaires'));
    }
    public function index()
    {
        return view('AjouterExperience');
    }

    public function store(Request $request)
    {
        $title_pub = $request->input('title_pub');
        $description = $request->input('description');
        $image_url = $request->input('image_url');

        $request->validate([
            'title_pub' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|url',
        ]);


        $publication = Publication::create([
            'title_pub' => $title_pub,
            'description' => $description,
            'image_url' => $image_url,
            'date_creation' => date('Y-m-d'),
            'id_user' => auth()->user()->id,
        ]);

        if ($publication) {
            return redirect()->route('Experiences')->with('success', 'Publication ajoutée avec succès.');
        } else {
            echo "Une erreur s'est produite lors de l'ajout de la publication.";
        }
    }
}
