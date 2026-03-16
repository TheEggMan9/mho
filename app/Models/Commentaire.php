<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = ['contenu', 'compte_id', 'fiche_id'];

    public function compte()
    {
        return $this->belongsTo(Compte::class);
    }

    public function fiche()
    {
        return $this->belongsTo(Fiche::class);
    }

    public function likes()
    {
        return $this->hasMany(CommentaireLike::class);
    }

    public function isLikedBy($userId)
    {
        return $this->likes()->where('compte_id', $userId)->exists();
    }

    public function likesCount()
    {
        return $this->likes()->count();
    }
}