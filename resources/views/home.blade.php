@extends('layouts.master')

@section('title', 'Lista Fumetti')

@section('content')
    <h2 class="text-center mb-4">Lista Fumetti</h2>

    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4">
        @foreach ($comics as $home => $comic)
            <div class="col">
                <div class="card bg-dark text-white border-0 shadow-sm h-100 comic-card position-relative overflow-hidden">
                    
                    <div class="ratio ratio-1x1">
                        <img src="{{ $comic['thumb'] }}" 
                             class="card-img-top object-fit-cover rounded-top" 
                             alt="{{ $comic['title'] }}">
                    </div>

                    <div class="card-body text-center p-2">
                        <h5 class="card-title text-truncate mb-0">{{ $comic['title'] }}</h5>
                    </div>

                    <div class="card-overlay d-flex flex-column justify-content-center align-items-center text-center">
                        <p class="mb-2 fw-bold fs-5 text-light">{{ $comic['price'] }}</p>
                        <a href="{{ route('comics.show', $home) }}" class="btn btn-primary btn-sm">Dettagli</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
