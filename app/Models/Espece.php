<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Espece extends Model
{
    protected $fillable = ['nomEspece'];

    public function fiches()
    {
        return $this->hasMany(Fiche::class);
    }
}