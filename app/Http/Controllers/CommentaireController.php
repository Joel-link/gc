<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function index()
    {
        return Commentaire::with(['client', 'service'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'note' => 'required|integer|min:1|max:5',
            'texte' => 'nullable|string',
        ]);

        return Commentaire::create($validated);
    }

    public function show(Commentaire $commentaire)
    {
        return $commentaire->load(['client', 'service']);
    }

    public function update(Request $request, Commentaire $commentaire)
    {
        $commentaire->update($request->all());
        return $commentaire;
    }

    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();
        return response()->noContent();
    }
}
