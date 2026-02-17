<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
    protected $fillable = [
        'nomFiche',
        'slug',
        'image',
        'espece_id',
        'organisation_id'
    ];

    public function espece()
    {
        return $this->belongsTo(Espece::class);
    }

    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }

    public function likes()
    {
    return $this->hasMany(Like::class);
    }

    // Vérifier si l'utilisateur connecté a liké
    public function isLikedBy($userId)
    {
        return $this->likes()->where('compte_id', $userId)->exists();
    }

    // Nombre de likes
    public function likesCount()
    {
    return $this->likes()->count();
    }
}