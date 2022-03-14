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
        'students' => [
            'marco',
            'luca',
            'anna',
            'carlo',
        ]
    ];

    return view('home', $data);
})->name('home');

Route::get('/anna', function () {
    return view('navs.anna');
})->name('anna');

Route::get('/carlo', function () {
    return view('navs.carlo');
})->name('carlo');

Route::get('/luca', function () {
    return view('navs.luca');
})->name('luca');

Route::get('/marco', function () {
    return view('navs.marco');
})->name('marco');
