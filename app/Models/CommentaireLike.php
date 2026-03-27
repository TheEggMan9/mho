<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class CommentaireLike extends Model
{
    protected $fillable = ['user_id', 'commentaire_id'];

    // Relation vers l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation vers le commentaire
    public function commentaire()
    {
        return $this->belongsTo(Commentaire::class);
    }
}