@extends('layouts.app')
@section('background-class', 'bg-image')

@section('title', 'Mot de passe oublié')
@section('no-searchbar')
@endsection

@section('content')
<div class="container py-5" style="max-width: 500px;">
    <div class="card shadow-lg">
        <div class="card-body p-4">
            <h2 class="mb-4 text-center">
                <i class="bi bi-key-fill"></i>
                Mot de passe oublié
            </h2>

            <p class="text-muted text-center mb-4">
                Entrez votre adresse email, vous recevrez un lien pour réinitialiser votre mot de passe.
            </p>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="email"
                           value="{{ old('email') }}" required autofocus>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-send-fill"></i>
                    Envoyer le lien de réinitialisation
                </button>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('login') }}">Retour à la connexion</a>
            </div>
        </div>
    </div>
</div>
@endsection