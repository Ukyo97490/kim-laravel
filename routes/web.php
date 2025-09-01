<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/a-propos', 'about')->name('about.show');

Route::prefix('recettes')->name('recipes.')->group(function () {
    Route::view('/', 'recipes.index')->name('index');
    Route::get('/{slug}', function (string $slug) {
        $title = ucwords(str_replace('-', ' ', $slug));
        return view('recipes.show', compact('title'));
    })->name('show');
});

Route::view('/contact', 'contact')->name('contact.show');
