<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\Recette;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalPublications = Publication::count();
        $totalUsers = User::count();
        $totalRecettes = Recette::count();
        return view('Home', compact('totalPublications', 'totalUsers', 'totalRecettes'));
    }
}
