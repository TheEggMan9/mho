<!-- ✅ SECTION COMMENTAIRES - Nouvelle -->
            <div class="col-12 mt-4" id="commentSection" data-fiche-id="{{ $fiche->id }}">
                <div class="hero-content-card">
                    <h2 class="hero-section-title">
                        <i class="bi bi-chat-dots-fill"></i> Commentaires
                        <span class="badge bg-primary ms-2">{{ $fiche->commentaires->count() }}</span>
                    </h2>

                    <!-- Formulaire d'ajout -->
                    @auth
                        <form id="commentForm" class="mb-4">
                            <div class="mb-3">
                                <textarea 
                                    class="form-control" 
                                    id="commentInput" 
                                    rows="3" 
                                    placeholder="Partagez votre avis sur {{ $fiche->nomFiche }}..."
                                    maxlength="500"
                                    required
                                ></textarea>
                                <small class="text-muted">
                                    <span id="charCount">0</span>/500 caractères
                                </small>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-send-fill"></i> Publier
                            </button>
                        </form>
                    @else
                        <div class="alert alert-info">
                            <i class="bi bi-info-circle"></i> 
                            <a href="{{ route('login') }}">Connectez-vous</a> pour laisser un commentaire.
                        </div>
                    @endauth

                    <!-- Liste des commentaires -->
                    <div id="commentsList">
                        @forelse($fiche->commentaires as $commentaire)
                            <div class="comment-item" data-comment-id="{{ $commentaire->id }}">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <strong class="text-primary">
                                            <i class="bi bi-person-circle"></i>
                                            {{ $commentaire->compte->nom }} {{ $commentaire->compte->prenom }}
                                        </strong>
                                        <small class="text-muted ms-2">
                                            <i class="bi bi-clock"></i>
                                            {{ $commentaire->created_at->diffForHumans() }}
                                        </small>
                                    </div>
                                    @if(Auth::check() && Auth::id() === $commentaire->compte_id)
                                        <button 
                                            class="btn btn-sm btn-outline-danger delete-comment" 
                                            onclick="deleteComment({{ $commentaire->id }})"
                                        >
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    @endif
                                </div>
                                <p class="comment-content">{{ $commentaire->contenu }}</p>
                                
                                <!-- Bouton Like -->
                                <div class="comment-actions mt-2">
                                    @auth
                                        <button 
                                            class="btn-comment-like {{ $commentaire->isLikedBy(Auth::id()) ? 'liked' : '' }}"
                                            data-comment-id="{{ $commentaire->id }}"
                                            onclick="toggleCommentLike({{ $commentaire->id }})"
                                        >
                                            <i class="bi {{ $commentaire->isLikedBy(Auth::id()) ? 'bi-heart-fill' : 'bi-heart' }}"></i>
                                            <span class="like-count">{{ $commentaire->likesCount() }}</span>
                                        </button>
                                    @else
                                        <a href="{{ route('login') }}" class="btn-comment-like">
                                            <i class="bi bi-heart"></i>
                                            <span class="like-count">{{ $commentaire->likesCount() }}</span>
                                        </a>
                                    @endauth
                                </div>
                                
                                <hr>
                            </div>
                        @empty
                            <div class="alert alert-secondary" id="noComments">
                                <i class="bi bi-chat"></i> Aucun commentaire pour le moment. Soyez le premier à donner votre avis !
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <script>
// ==================== CONFIG ROUTES ====================
const ficheId = "{{ $fiche->id }}";
const storeUrl = "{{ route('commentaire.store', $fiche->id) }}";
const deleteBaseUrl = "{{ url('/commentaires') }}";
const likeBaseUrl = "{{ url('/commentaires') }}";

// ==================== COMMENTAIRES SYSTÈME ====================

// Compteur de caractères
const commentInput = document.getElementById("commentInput");
const charCount = document.getElementById("charCount");

if (commentInput) {
    commentInput.addEventListener("input", function () {
        charCount.textContent = this.value.length;
    });
}

// ==================== AJOUT COMMENTAIRE ====================
const commentForm = document.getElementById("commentForm");

if (commentForm) {
    commentForm.addEventListener("submit", async function (e) {
        e.preventDefault();

        const contenu = commentInput.value.trim();
        if (!contenu) return;

        try {
            const response = await fetch(storeUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector(
                        'meta[name="csrf-token"]'
                    ).content,
                    Accept: "application/json",
                },
                body: JSON.stringify({ contenu }),
            });

            const data = await response.json();

            if (data.success) {
                const noComments = document.getElementById("noComments");
                if (noComments) noComments.remove();

                const commentsList = document.getElementById("commentsList");
                const newComment = createCommentElement(data.commentaire);
                commentsList.insertAdjacentHTML("afterbegin", newComment);

                commentInput.value = "";
                charCount.textContent = "0";

                updateCommentCount(1);
            }
        } catch (error) {
            console.error(error);
            alert("Erreur lors de l'ajout du commentaire");
        }
    });
}

// ==================== SUPPRIMER COMMENTAIRE ====================
async function deleteComment(commentId) {
    if (!confirm("Voulez-vous vraiment supprimer ce commentaire ?")) return;

    try {
        const response = await fetch(`${deleteBaseUrl}/${commentId}`, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
                Accept: "application/json",
            },
        });

        const data = await response.json();

        if (data.success) {
            const commentItem = document.querySelector(
                `[data-comment-id="${commentId}"]`
            );
            commentItem.remove();

            updateCommentCount(-1);

            const commentsList = document.getElementById("commentsList");

            if (commentsList.children.length === 0) {
                commentsList.innerHTML = `
                    <div class="alert alert-secondary" id="noComments">
                        <i class="bi bi-chat"></i> Aucun commentaire pour le moment.
                    </div>
                `;
            }
        }
    } catch (error) {
        console.error(error);
        alert("Erreur lors de la suppression");
    }
}

// ==================== LIKE COMMENTAIRE ====================
async function toggleCommentLike(commentId) {
    const button = document.querySelector(
        `[data-comment-id="${commentId}"] .btn-comment-like`
    );
    const icon = button.querySelector("i");
    const count = button.querySelector(".like-count");

    try {
        const response = await fetch(`${likeBaseUrl}/${commentId}/like`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
                Accept: "application/json",
            },
        });

        const data = await response.json();

        if (data.success) {
            if (data.liked) {
                button.classList.add("liked");
                icon.classList.remove("bi-heart");
                icon.classList.add("bi-heart-fill");
            } else {
                button.classList.remove("liked");
                icon.classList.remove("bi-heart-fill");
                icon.classList.add("bi-heart");
            }

            count.textContent = data.count;
        }
    } catch (error) {
        console.error(error);
    }
}

// ==================== HTML COMMENTAIRE ====================
function createCommentElement(comment) {
    return `
        <div class="comment-item" data-comment-id="${comment.id}">
            <div class="d-flex justify-content-between align-items-start mb-2">
                <div>
                    <strong class="text-primary">
                        <i class="bi bi-person-circle"></i>
                        ${comment.auteur}
                    </strong>
                    <small class="text-muted ms-2">
                        <i class="bi bi-clock"></i>
                        ${comment.date}
                    </small>
                </div>
                ${
                    comment.isOwner
                        ? `
                    <button 
                        class="btn btn-sm btn-outline-danger"
                        onclick="deleteComment(${comment.id})">
                        <i class="bi bi-trash"></i>
                    </button>
                `
                        : ""
                }
            </div>
            <p class="comment-content">${escapeHtml(comment.contenu)}</p>
            <div class="comment-actions mt-2">
                <button 
                    class="btn-comment-like ${comment.isLiked ? "liked" : ""}"
                    onclick="toggleCommentLike(${comment.id})">
                    <i class="bi ${comment.isLiked ? "bi-heart-fill" : "bi-heart"}"></i>
                    <span class="like-count">${comment.likesCount}</span>
                </button>
            </div>
            <hr>
        </div>
    `;
}

// ==================== COMPTEUR ====================
function updateCommentCount(change) {
    const badge = document.querySelector(".hero-section-title .badge");
    if (badge) {
        const current = parseInt(badge.textContent);
        badge.textContent = current + change;
    }
}

// ==================== SÉCURITÉ XSS ====================
function escapeHtml(text) {
    const div = document.createElement("div");
    div.textContent = text;
    return div.innerHTML;
}
</script>