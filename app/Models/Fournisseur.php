<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'type_marchandise',
        'adresse',
        'localisation'
    ];

    public function approvisionnements()
    {
        return $this->hasMany(Approvisionnement::class);
    }
}
