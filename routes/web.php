<?php

use Illuminate\Support\Facades\Route;

//Classe::metodo($uri, $callback);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-sono', function () {
    return view('chisono');
});
