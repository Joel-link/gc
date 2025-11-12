<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return Service::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'logo' => 'nullable|string',
            'description' => 'nullable|string',
            'details' => 'nullable|array',
        ]);

        return Service::create($validated);
    }

    public function show(Service $service)
    {
        return $service;
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());
        return $service;
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return response()->noContent();
    }
}
