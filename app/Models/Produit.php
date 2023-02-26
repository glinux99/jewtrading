<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'marque',
        'kilimetrage',
        'annee_fab',
        'moteur',
        'transmission',
        'carburateur',
        'emplacement',
        'model',
        'prix',
        'couleur',
        'numchassis',
        'declaration'
    ];
}
