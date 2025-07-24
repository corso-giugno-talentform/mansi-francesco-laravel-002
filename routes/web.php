<?php

use Illuminate\Support\Facades\Route;

//Classe::metodo($uri, $callback);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-sono', function () {
    return view('chisono');
});

Route::get('/contattami', function () {
    return view('contact');
});

Route::get('/servizi', function () {
    $services = ['comunicazione', 'website', 'consulenza'];
    return view('services', ['services' => $services]);
});


Route::get('/servizi/{service}', function ($service) {
    return  view('service', ['service' => $service]);
});
