<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use App\Notifications\ResetPasswordNotification;
use App\Notifications\VerifyEmailNotification;

class User extends Authenticatable implements FilamentUser, MustVerifyEmail
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
            if (!$user->is_admin && empty($user->name)) {
                $user->name = trim("{$user->prenom} {$user->nom}");
            }
        });
    }

    public function getFilamentName(): string
    {
        return $this->name ?? 'Utilisateur';
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_admin;
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailNotification());
    }
}