@extends('layouts.master')

@section('title', $comic['title'])

@section('content')
<div class="comic-detail text-white">
    <div class="row align-items-center">
        <div class="col-md-4 text-center mb-4 mb-md-0">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-8">
            <h2 class="mb-3">{{ $comic['title'] }}</h2>
            <p><strong>Series:</strong> {{ $comic['series'] }}</p>
            <p><strong>Type:</strong> {{ $comic['type'] }}</p>
            <p><strong>Price:</strong> <span class="badge bg-success">{{ $comic['price'] }}</span></p>
            <p class="mt-4">{{ $comic['description'] ?? 'Nessuna descrizione disponibile.' }}</p>

            <a href="{{ route('comics.home') }}" class="btn btn-outline-light mt-3">
                ← Torna alla lista
            </a>
        </div>
    </div>
</div>
@endsection
