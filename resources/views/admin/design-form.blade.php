@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($design) ? 'Modifier' : 'Ajouter' }} un élément de design</h2>

    <form action="{{ isset($design) ? route('designs.update', $design->id) : route('designs.store') }}" method="POST">
        @csrf
        @if(isset($design))
            @method('POST')
        @endif

        <div class="mb-3">
            <label for="type">Type (banniere, icone, texte...)</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $design->type ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="cle">Clé (ex: homepage_banner)</label>
            <input type="text" name="cle" id="cle" class="form-control" value="{{ old('cle', $design->cle ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="valeur">Valeur (texte, chemin image, HTML...)</label>
            <textarea name="valeur" id="valeur" class="form-control">{{ old('valeur', $design->valeur ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
</div>
@endsection
