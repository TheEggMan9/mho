<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentaireLike extends Model
{
    protected $fillable = ['compte_id', 'commentaire_id'];

    public function compte()
    {
        return $this->belongsTo(Compte::class);
    }

    public function commentaire()
    {
        return $this->belongsTo(Commentaire::class);
    }
}