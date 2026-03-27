<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Filament::serving(function () {
            if (!Auth::check() || !Auth::user()->is_admin) {
                abort(403, 'Accès interdit aux utilisateurs non-admin.');
            }
        });
    }
}