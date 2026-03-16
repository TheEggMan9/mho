<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Commentaire;
use App\Models\CommentaireLike;
use App\Models\Fiche;

class CommentaireController extends Controller
{
    /**
     * Ajouter un commentaire
     */
    public function store(Request $request, $ficheId)
    {
        $request->validate([
            'contenu' => 'required|string|min:3|max:500',
        ], [
            'contenu.required' => 'Le commentaire ne peut pas être vide.',
            'contenu.min' => 'Le commentaire doit contenir au moins 3 caractères.',
            'contenu.max' => 'Le commentaire ne peut pas dépasser 500 caractères.',
        ]);

        $fiche = Fiche::findOrFail($ficheId);

        $commentaire = Commentaire::create([
            'contenu' => $request->contenu,
            'compte_id' => Auth::id(),
            'fiche_id' => $ficheId,
        ]);

        return response()->json([
            'success' => true,
            'commentaire' => [
                'id' => $commentaire->id,
                'contenu' => $commentaire->contenu,
                'auteur' => $commentaire->compte->nom . ' ' . $commentaire->compte->prenom,
                'date' => $commentaire->created_at->diffForHumans(),
                'isOwner' => true,
                'likesCount' => 0,
                'isLiked' => false,
            ],
        ]);
    }

    /**
     * Supprimer un commentaire
     */
    public function destroy($commentaireId)
    {
        $commentaire = Commentaire::findOrFail($commentaireId);

        if ($commentaire->compte_id !== Auth::id()) {
            return response()->json(['error' => 'Non autorisé'], 403);
        }

        $commentaire->delete();

        return response()->json(['success' => true]);
    }

    /**
     * Liker/Unliker un commentaire
     */
    public function toggleLike($commentaireId)
    {
        $commentaire = Commentaire::findOrFail($commentaireId);
        $userId = Auth::id();

        $like = CommentaireLike::where('compte_id', $userId)
                    ->where('commentaire_id', $commentaireId)
                    ->first();

        if ($like) {
            $like->delete();
            $liked = false;
        } else {
            CommentaireLike::create([
                'compte_id' => $userId,
                'commentaire_id' => $commentaireId,
            ]);
            $liked = true;
        }

        return response()->json([
            'success' => true,
            'liked' => $liked,
            'count' => $commentaire->likes()->count(),
        ]);
    }
}