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
    // creo un array associativo con i link di navigazione rapida
    $quickNavigation = [
    'digital-comics' => [
        'name' => 'DIGITAL COMICS',
        'image' =>  asset('images/buy-comics-digital-comics.png')
    ],
    'dc-merchandise' => [
        'name' => 'DC MERCHANDISE',
        'image' => asset('images/buy-comics-merchandise.png')
    ],
    'subscription' => [
        'name' => 'SUBSCRIPTION',
        'image' => asset('images/buy-comics-subscriptions.png')
    ],
    'comic-shop-locator' => [
        'name' => 'COMIC SHOP LOCATOR',
        'image' => asset('images/buy-comics-shop-locator.png')
    ],
    'dc-power-visa' => [
        'name' => 'DC POWER VISA',
        'image' => asset('images/buy-dc-power-visa.svg')
    ]
];
$navigationSections = [
    'DC COMICS' => [
        'title' => 'DC COMICS',
        'links' => [
            'Characters',
            'Comics',
            'Movies',
            'Tv',
            'Games',
            'Videos',
            'News'
        ]
    ],
    'DC' => [
        'title' => 'DC',
        'links' => [
            'Terms Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ]
    ],
    'SITES' => [
        'title' => 'SITES',
        'links' => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ]
    ],
    'SHOP' => [
        'title' => 'SHOP',
        'links' => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ]
];

$imgSocial = [
    'facebook' => asset('images/footer-facebook.png'),
    'twitter' => asset('images/footer-twitter.png'),
    'youtube' => asset('images/footer-youtube.png'),
    'pinterest' => asset('images/footer-pinterest.png'),
    'periscope' => asset('images/footer-periscope.png'),
];
    // importo i dati dei comics come se fosse un simil database dai config
    $comics = config('comics');

    return view('pages.comics', compact('pages', 'comics', 'quickNavigation','navigationSections', 'imgSocial'),);
});