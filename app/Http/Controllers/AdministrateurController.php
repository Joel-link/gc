<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;

class AdministrateurController extends Controller
{
    public function index()
    {
        return Administrateur::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email|unique:administrateurs',
            'mot_de_passe' => 'required|string|min:6',
        ]);

        return Administrateur::create($validated);
    }

    public function show(Administrateur $administrateur)
    {
        return $administrateur;
    }

    public function update(Request $request, Administrateur $administrateur)
    {
        $administrateur->update($request->all());
        return $administrateur;
    }

    public function destroy(Administrateur $administrateur)
    {
        $administrateur->delete();
        return response()->noContent();
    }
}
