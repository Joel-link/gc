@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Éléments de design</h2>
    <a href="{{ route('designs.create') }}">Ajouter un élément</a>
    <ul>
        @foreach($designs as $design)
            <li>
                {{ $design->cle }} ({{ $design->type }})
                <a href="{{ route('designs.edit', $design->id) }}">Modifier</a>
                <form action="{{ route('designs.destroy', $design->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
