@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Services</h2>
    <a href="{{ route('services.create') }}">Ajouter un service</a>
    <ul>
        @foreach($services as $service)
            <li>
                {{ $service->nom }}
                <a href="{{ route('services.edit', $service->id) }}">Modifier</a>
                <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
