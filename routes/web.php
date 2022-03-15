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
    return view('home');
})->name('home');

Route::get('/characters', function () {
    return view('Characters');
})->name('Characters');

Route::get('/comics', function () {
    return view('Comics');
})->name('Comics');

Route::get('/movies', function () {
    return view('Movies');
})->name('Movies');

Route::get('/tv', function () {
    return view('TV');
})->name('TV');

Route::get('/games', function () {
    return view('Games');
})->name('Games');

Route::get('/collectibles', function () {
    return view('Collectibles');
})->name('Collectibles');

Route::get('/videos', function () {
    return view('Videos');
})->name('Videos');

Route::get('/fans', function () {
    return view('Fans');
})->name('Fans');

Route::get('/news', function () {
    return view('News');
})->name('News');

Route::get('/shop', function () {
    return view('Shop');
})->name('Shop');

Route::get('/visadc', function () {
    return view('VisaDC');
})->name('VisaDC');
