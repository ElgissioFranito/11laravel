<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("/pages/accueil");
});

Route::get("/aboutUs", function () {
    return view("/pages/aboutUs");
});
