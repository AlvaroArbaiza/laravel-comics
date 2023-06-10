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

// home
Route::get('/', function () {

    $comicBooks = config('comics.php');

    return view('pages.home', compact('comicBooks'));
})->name('home');

// comic
Route::get('/comic', function () {
    return view('pages.comic');
})->name('comic');