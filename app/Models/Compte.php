<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Compte extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'comptes';

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'mdp',
        'pseudo'
    ];
    
    protected $hidden = [
        'mdp', 
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = true;
    
    /**
     * Utiliser 'mdp' au lieu de 'password' pour l'authentification
     */
    public function getAuthPassword()
    {
        return $this->mdp;
    }

    /**
     * Obtenir le nom de la colonne pour le remember token
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }
    
    /**
     * Formatage des dates pour la sérialisation
     */
    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    // Relation avec les likes
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function commentaires()
    {
    return $this->hasMany(Commentaire::class);
    }
}