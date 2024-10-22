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
    return view('pages.comics', compact('pages'));
});