<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use App\Notifications\ResetPasswordNotification;

class User extends Authenticatable implements FilamentUser
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

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_admin;
    }

    // Email de réinitialisation de mot de passe (template custom MHO)
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}