<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approvisionnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'fournisseur_id',
        'code',
        'designation',
        'prix',
    ];

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class)->withPivot('quantite','prix_achat_unitaire')->withTimestamps();
    }
}
