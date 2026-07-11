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

    <style>
        #top-block {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030;
        }

        #page-content {
            padding-top: 220px;
        }
    </style>
</head>

<body>

<div class="@yield('background-class', 'bg-image-hero')">

    <div id="top-block">
        {{-- Header --}}
        @include('partials.header')

        {{-- Navbar --}}
        @include('partials.navbar')

        {{-- Searchbar (désactivable) --}}
        @unless(View::hasSection('no-searchbar'))
            @include('partials.searchbar')
        @endunless
    </div>

    <div id="page-content">
        {{-- Contenu principal --}}
        @yield('content')
    </div>

</div>

{{-- JS Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

{{-- JS global --}}
<script src="{{ asset('js/barreRecherche.js') }}"></script>
<script src="{{ asset('js/like.js') }}"></script>
<script src="{{ asset('js/commentaire.js') }}"></script>

{{-- JS spécifique --}}
@yield('scripts')

{{-- Ajuste dynamiquement le padding selon la hauteur réelle du bloc fixe --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const topBlock = document.getElementById('top-block');
    const pageContent = document.getElementById('page-content');

    function adjustPadding() {
        if (topBlock && pageContent) {
            pageContent.style.paddingTop = topBlock.offsetHeight + 'px';
        }
    }

    adjustPadding();
    window.addEventListener('resize', adjustPadding);
});
</script>

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