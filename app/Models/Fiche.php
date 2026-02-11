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
        'organisation_id',
    ];

    public function espece()
    {
        return $this->belongsTo(Espece::class);
    }

    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }
}