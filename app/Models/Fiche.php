<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
    protected $table = 'fiches';
    protected $fillable = ['nomFiche','slug'];
}

