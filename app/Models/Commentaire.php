<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Commentaire extends Model
{
    protected $fillable = ['contenu', 'user_id', 'fiche_id'];
    // Relation vers l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class); // ← mettre User
    }

    // Relation vers la fiche
    public function fiche()
    {
        return $this->belongsTo(Fiche::class);
    }

    // Relation vers les likes
    public function likes()
    {
        return $this->hasMany(CommentaireLike::class);
    }

    // Vérifier si un utilisateur a liké ce commentaire
    public function isLikedBy($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }

    // Nombre de likes
    public function likesCount()
    {
        return $this->likes()->count();
    }
}