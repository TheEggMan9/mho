<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\Fiche;

class LikeController extends Controller
{
    /**
     * Liker ou unliker une fiche
     */
    public function toggle(Request $request, $ficheId)
    {
        // Vérifier que l'utilisateur est connecté
        if (!Auth::check()) {
            return response()->json([
                'error' => 'Vous devez être connecté pour liker.'
            ], 401);
        }

        $fiche = Fiche::findOrFail($ficheId);
        $userId = Auth::id();

        // Vérifier si déjà liké
        $like = Like::where('compte_id', $userId)
                    ->where('fiche_id', $ficheId)
                    ->first();

        if ($like) {
            // Unliker
            $like->delete();
            $liked = false;
        } else {
            // Liker
            Like::create([
                'compte_id' => $userId,
                'fiche_id' => $ficheId,
            ]);
            $liked = true;
        }

        return response()->json([
            'liked' => $liked,
            'count' => $fiche->likes()->count(),
        ]);
    }
}