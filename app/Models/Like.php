<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Fiche;

class Like extends Model
{
    protected $fillable = ['user_id', 'fiche_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fiche()
    {
        return $this->belongsTo(Fiche::class);
    }
}