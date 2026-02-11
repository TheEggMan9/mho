<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $fillable = ['nomOrganisation'];

    public function fiches()
    {
        return $this->hasMany(Fiche::class);
    }
}