<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;


    protected $primaryKey = 'id_commentaire';

    protected $fillable = [
        'contenu',
        'date_creation',
        'id_pub',
        'id_user'
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class, 'id_pub');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
