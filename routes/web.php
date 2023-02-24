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

    $cards = config('comics');

    $dc_comics = [
        ['text' => 'Characters',        'url' => '#',        'current' => false,],
        ['text' => 'Comics',        'url' => '#',        'current' => true,],
        ['text' => 'Movies',        'url' => '#',        'current' => false,],
        ['text' => 'TV',        'url' => '#',        'current' => false,],
        ['text' => 'Games',        'url' => '#',        'current' => false,],
        ['text' => 'Collectibles',        'url' => '#',        'current' => false,],
        ['text' => 'Videos',        'url' => '#',        'current' => false,],
        ['text' => 'Fans',        'url' => '#',        'current' => false,],
        ['text' => 'News',        'url' => '#',        'current' => false,],
        ['text' => 'Shop',        'url' => '#',        'current' => false,]
    ];

    $terms = [
        'Terms of use',
        'Privacy policy',
        'Ad choices',
        'Advertising',
        'Jobs',
        'Subs',
        'Talent Workshop',
        'Cpsc certificates',
        'Ratings',
        'Shop help',
        'Contact us'
    ];

    $sites = [
        'DC',
        'MAD magazine',
        'DC kids',
        'DC universe',
        'DC Power Visa'
    ];

    return view('main', compact('cards', 'dc_comics', 'terms', 'sites'));
})->name('main');


Route::get('/comics', function () {

    $cards = config('comics');

    $dc_comics = [
        ['text' => 'Characters',        'url' => '#',        'current' => false,],
        ['text' => 'Comics',        'url' => '#',        'current' => true,],
        ['text' => 'Movies',        'url' => '#',        'current' => false,],
        ['text' => 'TV',        'url' => '#',        'current' => false,],
        ['text' => 'Games',        'url' => '#',        'current' => false,],
        ['text' => 'Collectibles',        'url' => '#',        'current' => false,],
        ['text' => 'Videos',        'url' => '#',        'current' => false,],
        ['text' => 'Fans',        'url' => '#',        'current' => false,],
        ['text' => 'News',        'url' => '#',        'current' => false,],
        ['text' => 'Shop',        'url' => '#',        'current' => false,]
    ];

    $terms = [
        'Terms of use',
        'Privacy policy',
        'Ad choices',
        'Advertising',
        'Jobs',
        'Subs',
        'Talent Workshop',
        'Cpsc certificates',
        'Ratings',
        'Shop help',
        'Contact us'
    ];

    $sites = [
        'DC',
        'MAD magazine',
        'DC kids',
        'DC universe',
        'DC Power Visa'
    ];


    return view('comics', compact('cards', 'dc_comics', 'terms', 'sites'));
})->name('comics');
