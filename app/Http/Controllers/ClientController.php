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

    $client = Client::create($request->all());

    // Envoi de l'email
    Mail::to('contact@genie-consultant.ga')->send(new InscriptionClient($client));

    return redirect()->route('client.home')->with('success', 'Inscription réussie !');
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
