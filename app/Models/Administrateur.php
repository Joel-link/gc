<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrateur extends Authenticatable
{
    use HasFactory;

    protected $table = 'administrateurs';

    protected $fillable = [
        'nom',
        'email',
        'mot_de_passe',
    ];

    // Pour que Laravel utilise le bon champ pour l'authentification
    protected $hidden = [
        'mot_de_passe',
        'remember_token',
    ];

    // Si tu veux que Laravel gère automatiquement le hash du mot de passe
    public function setMotDePasseAttribute($value)
    {
        $this->attributes['mot_de_passe'] = bcrypt($value);
    }
}
