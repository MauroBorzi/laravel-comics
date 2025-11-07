<?php

use Illuminate\Support\Facades\Route;


// Homepage: lista fumetti
Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('comics.home');

// Dettaglio singolo fumetto
Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');

    // Controllo esistenza fumetto
    abort_unless(isset($comics[$id]), 404);

    $comic = $comics[$id];
    return view('show', compact('comic'));
})->name('comics.show');


Route::get('/news', function () {
    $news = [
        [
            'title' => 'Nuova uscita Marvel: Spider-Man #10',
            'content' => 'Peter Parker affronta un nuovo nemico in questa edizione speciale.',
            'date' => '2025-11-01',
            'image' => 'https://imgs.search.brave.com/gAZQuZyt6WjcUWF6aXCIBaiJqtOJAK-X4nxS9Vbvwno/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9jZG4y/LnBlbmd1aW4uY29t/LmF1L2NvdmVycy9v/cmlnaW5hbC85Nzgx/NDAxMjc1NDI2Lmpw/Zw',
        ],
        [
            'title' => 'Batman compie 85 anni!',
            'content' => 'DC Comics celebra il Cavaliere Oscuro con una serie di ristampe e cover variant.',
            'date' => '2025-10-15',
            'image' => "https://imgs.search.brave.com/jgxYlrx442aozemzjqdmCsd9DkIkRollJp1T8sG8TfE/rs:fit:720:1106:1/g:ce/aHR0cHM6Ly9veXN0/ZXIuaWduaW1ncy5j/b20vd29yZHByZXNz/L3N0Zy5pZ24uY29t/LzIwMTgvMTAvU1RM/MDk3MDk1LTcyMHgx/MTA2LmpwZw",
        ],
        [
            'title' => 'Disney acquisisce nuovi diritti per serie Marvel',
            'content' => 'Annunciati nuovi progetti animati in arrivo su Disney+ nel 2026.',
            'date' => '2025-09-28',
            'image' => "https://imgs.search.brave.com/bf_FlGnymAgmvweY8YiLAcyy600JdSMl_jHpdR3t5ro/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvNTA5/M2IxOTEtZTkzZS00/NTJjLThhYTQtYTEw/ZDY0ZTcxN2E5LjA5/N2UwZWM5NDgzYzky/OGExMjY4Nzk1Nzk2/NTliZWNjLmpwZWc_/b2RuV2lkdGg9NjEy/Jm9kbkhlaWdodD02/MTImb2RuQmc9ZmZm/ZmZm",
        ],
    ];

    return view('news', compact('news'));
})->name('news.index');
