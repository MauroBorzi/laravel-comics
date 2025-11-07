@extends('layouts.master')

@section('title', 'Lista Fumetti')

@section('content')
    <h2 class="text-center mb-4">Lista Fumetti</h2>

    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-md-3 mb-4">
                <div class="card bg-dark text-white border-0 shadow-sm h-100">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{{ $comic['title'] }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
