<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('comics.home');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');

    // Controllo esistenza fumetto
    abort_unless(isset($comics[$id]), 404);

    $comic = $comics[$id];
    return view('show', compact('comic'));
})->name('comics.show');
