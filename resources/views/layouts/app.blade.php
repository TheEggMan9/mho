<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style3.css') }}" rel="stylesheet">
</head>

<body>
<div class="bg-image-hero">
<div class="@yield('background-class', 'bg-image-hero')">


@include('partials.header')
@include('partials.navbar')
@include('partials.searchbar')

@yield('content')

</div>

<script src="{{ asset('js/barreRecherche.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
