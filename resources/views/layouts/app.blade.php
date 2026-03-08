<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', "Marvel's Heroes Origins")</title>

    {{-- Sécurité AJAX --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- CSS global --}}
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style4.css') }}" rel="stylesheet">

    {{-- CSS spécifique --}}
    @yield('styles')
</head>

<body>

<div class="@yield('background-class', 'bg-image-hero')">

    {{-- Header --}}
    @include('partials.header')

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Searchbar (désactivable) --}}
    @unless(View::hasSection('no-searchbar'))
        @include('partials.searchbar')
    @endunless

    {{-- Contenu principal --}}
    @yield('content')

</div>

{{-- JS Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

{{-- JS global --}}
<script src="{{ asset('js/barreRecherche.js') }}"></script>
<script src="{{ asset('js/like.js') }}"></script>

{{-- JS spécifique --}}
@yield('scripts')

{{-- Toggle universel mot de passe --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tous les boutons avec la classe toggle-password-btn
    document.querySelectorAll('.toggle-password-btn').forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target'); // id du champ password
            const field = document.getElementById(targetId);
            const icon = this.querySelector('i');

            if (!field) return;

            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        });
    });
});
</script>

</body>
</html>
