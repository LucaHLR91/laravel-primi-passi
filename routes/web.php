<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'nome' => 'Capitani AS Roma:',
        'elenco_giocatori' => [
            'Francesco Totti',
            'Daniele Derossi',
            'Amedeo Amadei',
            'Lorenzo Pellegrini',
            'Alessandro Florenzi',
            'Agostino Di bartolomei',
            'Giuseppe Giannini'
        ]
    ];

    return view('home', $data);
});

Route::get('/about_us', function () {

    return view('about_us');
});

Route::get('/contacts', function () {

    return view('contacts');
});
