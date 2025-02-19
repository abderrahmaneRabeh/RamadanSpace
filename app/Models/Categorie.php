<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_categorie';

    protected $fillable = [
        'nom_categorie',
    ];
    public function recettes()
    {
        return $this->hasMany(Recette::class, 'id_category', 'id_categorie');
    }
}
