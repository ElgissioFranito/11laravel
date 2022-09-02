<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("accueil");
});

Route::get("/aboutUs", function () {
    return view("aboutUs");
});
