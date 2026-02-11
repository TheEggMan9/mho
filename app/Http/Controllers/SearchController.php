<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fiche;
use App\Models\Espece;
use App\Models\Organisation;

class SearchController extends Controller
{
    // Autocomplétion
    public function search(Request $request)
    {
        $query = $request->get('q');

        $results = Fiche::query()
            ->with(['espece', 'organisation']) // ← IMPORTANT : charger les relations
            ->when($query, fn($q) => $q->where('nomFiche', 'like', "%{$query}%"))
            ->select('id', 'nomFiche', 'slug', 'image', 'espece_id', 'organisation_id')
            ->get();

        return response()->json($results);
    }

    // Fiche détaillée
    public function show($slug)
    {
        $fiche = Fiche::where('slug', $slug)->firstOrFail();
        return view("heros.{$slug}", compact('fiche'));
    }

    // Résultats filtrés
    public function resultats(Request $request)
    {
        $especeId = $request->get('espece_id');
        $orgId = $request->get('organisation_id');

        $fiches = Fiche::query()
            ->with(['espece', 'organisation'])
            ->when($especeId, fn($q) => $q->where('espece_id', $especeId))
            ->when($orgId, fn($q) => $q->where('organisation_id', $orgId))
            ->get();

        // Si requête AJAX -> retourner JSON
        if ($request->wantsJson() || $request->ajax()) {
            return response()->json($fiches);
        }

        return view('fiches.resultats', compact('fiches'));
    }
}