<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fiche;

class SearchController extends Controller
{
    // Recherche AJAX
    public function search(Request $request)
    {
        $query = $request->get('q');

        if (!$query) {
            return response()->json([]);
        }

        $results = Fiche::where('nomFiche', 'like', "%{$query}%")
            ->select('nomFiche', 'slug')
            ->get();

        return response()->json($results);
    }

    // Affiche la fiche
    public function show($slug)
{
    $fiche = Fiche::where('slug', $slug)->firstOrFail();

    $viewName = str_replace('-', '', $slug); 

    return view("heros.{$viewName}", compact('fiche'));
}

}


