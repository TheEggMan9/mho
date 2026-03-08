@extends('layouts.app')

@section('title', 'Résultats de recherche')
@section('background-class', 'bg-image')

@section('styles')
<link href="{{ asset('css/style3.css') }}" rel="stylesheet">
<link href="{{ asset('css/fiches-animation.css') }}" rel="stylesheet">
@endsection

@section('content')

<!-- Résultats -->
<div class="container py-4">

    <div class="card shadow-lg">

        <div class="card-body p-4">

            <h2 class="mb-4">
                <i class="bi bi-search"></i>
                Résultats de la recherche
            </h2>

            {{-- Filtres actifs --}}
            @if(request('espece_id') || request('organisation_id'))

                <div class="alert alert-info">

                    <strong>
                        <i class="bi bi-filter"></i>
                        Filtres appliqués :
                    </strong>

                    @if(request('espece_id'))

                        @php
                        $espece = App\Models\Espece::find(request('espece_id'));
                        @endphp

                        @if($espece)
                        <span class="badge bg-primary">
                            Espèce : {{ $espece->nomEspece }}
                        </span>
                        @endif

                    @endif

                    @if(request('organisation_id'))

                        @php
                        $organisation = App\Models\Organisation::find(request('organisation_id'));
                        @endphp

                        @if($organisation)
                        <span class="badge bg-success">
                            Organisation : {{ $organisation->nomOrganisation }}
                        </span>
                        @endif

                    @endif

                </div>

            @endif


            {{-- Résultats --}}
            @if(isset($fiches) && $fiches->count() > 0)

                <p class="text-muted mb-3">

                    <i class="bi bi-check-circle"></i>

                    <span class="count-animation">
                        {{ $fiches->count() }}
                    </span>

                    héros trouvé(s)

                </p>

                <div class="row mt-3">

                    @foreach($fiches as $fiche)

                    <div class="col-md-4 mb-3 fiche-card">

                        <div class="card h-100">

                            {{-- IMAGE --}}
                            @if($fiche->image)

                                <img src="{{ asset('img/heros/'.$fiche->image) }}"
                                     class="card-img-top"
                                     alt="{{ $fiche->nomFiche }}"
                                     style="height:450px;object-fit:cover;">

                            @else

                                <img src="{{ asset('img/default-hero.png') }}"
                                     class="card-img-top"
                                     alt="Image par défaut"
                                     style="height:450px;object-fit:cover;">

                            @endif


                            <div class="card-body">

                                <h5 class="card-title">
                                    {{ $fiche->nomFiche }}
                                </h5>


                                @if($fiche->espece)

                                <p>

                                    <strong>Espèce :</strong>

                                    <span class="badge bg-primary">
                                        {{ $fiche->espece->nomEspece }}
                                    </span>

                                </p>

                                @endif


                                @if($fiche->organisation)

                                <p>

                                    <strong>Organisation :</strong>

                                    <span class="badge bg-success">
                                        {{ $fiche->organisation->nomOrganisation }}
                                    </span>

                                </p>

                                @endif


                                <a href="{{ url('heros/'.$fiche->slug) }}"
                                   class="btn btn-primary">

                                    <i class="bi bi-eye"></i>
                                    Voir la fiche

                                </a>


                                {{-- LIKE --}}
                                <div class="like-container text-center mt-3">

                                    @auth

                                    <button
                                        class="btn-like {{ $fiche->isLikedBy(Auth::id()) ? 'liked' : '' }}"
                                        data-fiche-id="{{ $fiche->id }}"
                                        onclick="toggleLike({{ $fiche->id }}, '{{ route('like.toggle',$fiche->id) }}')"
                                    >

                                        <i class="bi {{ $fiche->isLikedBy(Auth::id()) ? 'bi-heart-fill' : 'bi-heart' }}"></i>

                                        <span class="like-count">
                                            {{ $fiche->likesCount() }}
                                        </span>

                                    </button>

                                    @else

                                    <a href="{{ route('login') }}" class="btn-like">

                                        <i class="bi bi-heart"></i>

                                        <span class="like-count">
                                            {{ $fiche->likesCount() }}
                                        </span>

                                    </a>

                                    <small class="text-muted d-block mt-1">
                                        Connectez-vous pour liker
                                    </small>

                                    @endauth

                                </div>

                            </div>

                        </div>

                    </div>

                    @endforeach

                </div>

            @else

                <div class="alert alert-warning">

                    <i class="bi bi-exclamation-triangle-fill"></i>

                    Aucun héros ne correspond aux filtres.

                </div>

            @endif

        </div>

    </div>

</div>

@endsection



@section('scripts')

<script src="{{ asset('js/barreRecherche.js') }}"></script>


<script>
async function toggleLike(ficheId, url) {

    const button = document.querySelector(`[data-fiche-id="${ficheId}"]`);
    const icon = button.querySelector("i");
    const count = button.querySelector(".like-count");

    try {

        const response = await fetch(url, {

            method:"POST",

            headers:{
                "Content-Type":"application/json",
                "X-CSRF-TOKEN":document.querySelector('meta[name="csrf-token"]').content,
                Accept:"application/json",
            },

        });

        if(!response.ok){

            if(response.status === 401)
                window.location.href="/onglet/seConnecter";

            else
                throw new Error(`Erreur HTTP : ${response.status}`);

        }

        const data = await response.json();

        if(data.liked){

            button.classList.add("liked");
            icon.classList.remove("bi-heart");
            icon.classList.add("bi-heart-fill");

        }else{

            button.classList.remove("liked");
            icon.classList.remove("bi-heart-fill");
            icon.classList.add("bi-heart");

        }

        count.textContent = data.count;

    }catch(error){

        console.error(error);

    }

}
</script>

@endsection