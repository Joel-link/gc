<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }


public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string',
        'prenoms' => 'required|string',
        'email' => 'required|email',
        'telephone' => 'required|string',
        'adresse' => 'required|string',
        'profession' => 'required|string',
    ]);

    Client::create($validated);

    // Envoi par email
    Mail::raw("
        Nouvelle inscription client :
        Nom : {$validated['name']}
        Prénoms : {$validated['prenoms']}
        Email : {$validated['email']}
        Téléphone : {$validated['telephone']}
        Adresse : {$validated['adresse']}
        Profession : {$validated['profession']}
    ", function ($message) {
        $message->to('tonemail@exemple.com')
                ->subject('Nouvelle inscription client');
    });

    // Envoi par WhatsApp via API (exemple générique)
    Http::post('https://api.whatsapp.com/send', [
        'phone' => 'TON_NUMERO',
        'message' => "Nouvelle inscription client :\nNom : {$validated['name']}\nPrénoms : {$validated['prenoms']}\nEmail : {$validated['email']}\nTéléphone : {$validated['telephone']}\nAdresse : {$validated['adresse']}\nProfession : {$validated['profession']}"
    ]);

    return back()->with('success', 'Informations envoyées avec succès !');
}


    public function show(Client $client)
    {
        return $client;
    }

    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return $client;
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return response()->noContent();
    }
}
