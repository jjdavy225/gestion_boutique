<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'prix_vente',
        'volume',
    ];

    public function approvisionnements()
    {
        return $this->belongsToMany(Approvisionnement::class)->withPivot('quantite','prix_achat_unitaire')->withTimestamps();
    }
}
