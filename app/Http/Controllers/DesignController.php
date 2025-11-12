<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        return Design::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'cle' => 'required|string|unique:designs',
            'valeur' => 'required|string',
        ]);

        return Design::create($validated);
    }

    public function update(Request $request, Design $design)
    {
        $design->update($request->all());
        return $design;
    }

    public function destroy(Design $design)
    {
        $design->delete();
        return response()->noContent();
    }

    public function upload(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'cle' => 'required|string|unique:designs',
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('designs', 'public');

        return Design::create([
            'type' => $request->type,
            'cle' => $request->cle,
            'valeur' => $path,
        ]);
    }

}
