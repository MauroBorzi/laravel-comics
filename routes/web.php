<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('comics.home');
