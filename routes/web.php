<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("/pages/accueil");
})->name('app-home');

Route::get("/aboutUs", function () {
    return view("/pages/aboutUs");
})->name('app-about');
