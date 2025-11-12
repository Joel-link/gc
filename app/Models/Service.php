<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Nom de la table (optionnel si le nom est "services")
    protected $table = 'services';

    // Champs autorisés à être remplis en masse
    protected $fillable = [
        'nom',
        'logo',
        'description',
        'details',
    ];

    // Cast automatique du champ JSON en tableau PHP
    protected $casts = [
        'details' => 'array',
    ];
}
