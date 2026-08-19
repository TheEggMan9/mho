@extends('layouts.app')

@section('title', 'Vérifiez votre email')
@section('no-searchbar')
@section('background-class', 'bg-image')

@endsection

@section('content')
<div class="container py-5" style="max-width: 500px;">
    <div class="card shadow-lg">
        <div class="card-body p-4 text-center">
            <h2 class="mb-4">
                <i class="bi bi-envelope-check-fill"></i>
                Vérifiez votre adresse email
            </h2>

            <p class="text-muted">
                Un lien de vérification a été envoyé à votre adresse email lors de votre inscription.
                Cliquez dessus pour pouvoir commenter et liker les fiches héros.
            </p>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success">
                    Un nouveau lien de vérification a été envoyé !
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-send-fill"></i>
                    Renvoyer l'email de vérification
                </button>
            </form>

            <div class="mt-3">
                <a href="{{ url('/') }}" class="text-muted">Retour à l'accueil</a>
            </div>
        </div>
    </div>
</div>
@endsection