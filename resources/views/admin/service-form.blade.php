@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($service) ? 'Modifier' : 'Ajouter' }} un service</h2>

    <form action="{{ isset($service) ? route('services.update', $service->id) : route('services.store') }}" method="POST">
        @csrf
        @if(isset($service))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="nom">Nom du service</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $service->nom ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label for="logo">Logo (URL ou chemin)</label>
            <input type="text" name="logo" id="logo" class="form-control" value="{{ old('logo', $service->logo ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="description">Description courte</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $service->description ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="details">Détails (JSON)</label>
            <textarea name="details" id="details" class="form-control">{{ old('details', json_encode($service->details ?? [], JSON_PRETTY_PRINT)) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
