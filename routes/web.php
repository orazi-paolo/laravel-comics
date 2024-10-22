<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // creo un array associativo con le pagine del sito
    $pages = [
        'characters' => 'CHARACTERS',
        'comics' => 'COMICS',
        'movies' => 'MOVIES',
        'tv' => 'TV',
        'games' => 'GAMES',
        'collectibles' => 'COLLECTIBLES',
        'videos' => 'VIDEOS',
        'fans' => 'FANS',
        'news' => 'NEWS',
        'shop' => 'SHOP',
    ];
    // importo i dati dei comics come se fosse un simil database dai config
    $comics = config('comics');

    return view('pages.comics', compact('pages', 'comics'));
});