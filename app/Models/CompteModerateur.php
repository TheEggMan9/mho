<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompteModerateur extends Authenticatable
{
    use HasFactory;

    protected $table = 'comptes_moderateurs';

    protected $fillable = [
        'nom',
        'prenom',
        'login',
        'mdp'
    ];

    public $timestamps = true;
}
