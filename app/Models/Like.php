<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['compte_id', 'fiche_id'];

    public function compte()
    {
        return $this->belongsTo(Compte::class);
    }

    public function fiche()
    {
        return $this->belongsTo(Fiche::class);
    }
}