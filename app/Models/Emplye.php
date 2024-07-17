<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplye extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'CIN',
        'birthdate',
        'hiredate',
        'phone',
        'genre',
        'grade',
        'echelle',
        'echelon',
        'indice',
        'arrondisement',
        'division',
        'service',
        'poste',
        'niveau',
        'specialite',
        'nature',
        'nometablissement',
        'villeetablissement',
        'commentaire',
        'autrediplome',
        'NAA',
        'NAO',
        'roteurdate',
        'voiture',
        'model',
        'dotation',
        'longement',
        'note'
    ];

}
