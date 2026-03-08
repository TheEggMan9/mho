<div class="like-container text-center mt-3">
    @auth
        <button
            class="btn-like {{ $fiche->isLikedBy(Auth::id()) ? 'liked' : '' }}"
            data-fiche-id="{{ $fiche->id }}"
            onclick="toggleLike({{ $fiche->id }}, '{{ route('like.toggle', $fiche->id) }}')"
        >
            <i class="bi {{ $fiche->isLikedBy(Auth::id()) ? 'bi-heart-fill' : 'bi-heart' }}"></i>
            <span class="like-count">{{ $fiche->likesCount() }}</span>
        </button>
    @else
        <a href="{{ route('login') }}" class="btn-like">
            <i class="bi bi-heart"></i>
            <span class="like-count">{{ $fiche->likesCount() }}</span>
        </a>
        <small class="text-muted d-block mt-1">Connectez-vous pour liker</small>
    @endauth
</div>
