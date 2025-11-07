@extends('layouts.master')

@section('title', 'News')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4 text-primary">Ultime News</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($news as $item)
            <div class="col">
                <div class="card h-100 shadow-sm bg-dark text-white news-card border-0">
                    <img src="{{ $item['image'] }}" class="card-img-top object-fit-cover" alt="{{ $item['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $item['title'] }}</h5>
                        <p class="card-text small text-secondary mb-2">{{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}</p>
                        <p class="card-text">{{ $item['content'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
