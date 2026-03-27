<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'nom',
        'prenom',
        'pseudo',
        'email',
        'password',
        'is_admin',
    ];

    protected static function booted()
    {
        static::creating(function ($user) {
            // Si ce n'est pas un admin et que name est vide
            if (!$user->is_admin && empty($user->name)) {
                $user->name = trim("{$user->prenom} {$user->nom}");
            }
        });
    }

    // Pour Filament
    public function getFilamentName(): string
    {
        return $this->name ?? 'Utilisateur';
    }
}
