<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_recettes';

    protected $fillable = [
        'titre',
        'description',
        'ingredients',
        'etapes',
        'image_url',
        'id_user',
        'id_category',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_category', 'id_categorie');
    }
}
