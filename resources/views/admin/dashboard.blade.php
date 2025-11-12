@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tableau de bord administrateur</h1>
    <ul>
        <li><a href="{{ route('admin.services') }}">Gérer les services</a></li>
        <li><a href="{{ route('admin.designs') }}">Modifier le design</a></li>
    </ul>
</div>
@endsection
