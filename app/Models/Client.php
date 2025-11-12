<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Nom de la table (optionnel si le nom est "clients")
    protected $table = 'clients';

    // Champs autorisés à être remplis en masse
    protected $fillable = [
        'name',
        'prenoms',
        'email',
        'telephone',
        'adresse',
        'profession',
    ];
}
