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

    $comics = config('comics.comics');
    //dd($comics);
    
    return view('home', compact('comics'));
})->name('home');

Route::get('/comics/{id}', function ($id) {

    $comic = config('comics.comics')[$id];
    //dd($comic);

    return view('comic', compact('comic'));
})->name('comics');
