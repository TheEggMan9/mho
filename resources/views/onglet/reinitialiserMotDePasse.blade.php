@extends('layouts.app')

@section('title', 'Réinitialiser le mot de passe')
@section('background-class', 'bg-image')

@section('no-searchbar')
@endsection

@section('content')
<div class="container py-5" style="max-width: 500px;">
    <div class="card shadow-lg">
        <div class="card-body p-4">
            <h2 class="mb-4 text-center">
                <i class="bi bi-shield-lock-fill"></i>
                Nouveau mot de passe
            </h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="email"
                           value="{{ old('email', $email) }}" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Nouveau mot de passe</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <button class="btn btn-outline-secondary toggle-password-btn" type="button" data-target="password">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                    <small class="text-muted">
                        8 caractères minimum, avec majuscule, minuscule, chiffre et caractère spécial.
                    </small>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password_confirmation"
                               name="password_confirmation" required>
                        <button class="btn btn-outline-secondary toggle-password-btn" type="button" data-target="password_confirmation">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-check-circle-fill"></i>
                    Réinitialiser le mot de passe
                </button>
            </form>
        </div>
    </div>
</div>
@endsection