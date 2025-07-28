<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

//Classe::metodo($uri, $callback);

Route::get('/test', function () {
    $ciccio = 'Francesco';
    return view('test', ['ciccio' => $ciccio]);
});
Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/chi-sono', [PageController::class, 'about'])->name('about');
Route::get('/contattami', [PageController::class, 'contact'])->name('contact');
Route::get('/servizi', [PageController::class, 'services'])->name('services');
Route::get('/servizi/{service}', [PageController::class, 'service'])->name('service');
Route::get('/progetti/{project}', [PageController::class, 'project'])->name('project');
