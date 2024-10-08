<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('home');
});

Route::get('/activaciones', function () {
    return view('activaciones');
})->name('activaciones');

Route::get('/premios', function () {
    return view('premios');
})->name('activaciones');

Route::get('/dewalt', function () {
    return view('welcome');
})->name('dewalt');

Route::get('/dewalt-29-junio', function () {
    return view('dewalt-29-junio');
})->name('dewalt');

Route::get('/black-and-decker', function () {
    return view('black-and-decker');
})->name('black-and-decker');

Route::get('/stanley-28-mayo', function () {
    return view('stanley_28');
})->name('stanley-28-mayo');

Route::get('/stanley-29-mayo', function () {
    return view('stanley_29');
})->name('stanley-29-mayo');

Route::get('/stanley-30-mayo', function () {
    return view('stanley_30');
})->name('stanley-30-mayo');

Route::get('/stanley-31-mayo', function () {
    return view('stanley_31');
})->name('stanley-31-mayo');

Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');

Route::get('/dewalt/catalogo-accesorios', function () {
    return response()->redirectTo('/pdf/catalogo-accesorios.pdf');
})->name('dewalt.catalogo-accesorios');

Route::post('/inscribe', [\App\Http\Controllers\InscriptionController::class, 'store'])->name('inscribe');

Route::post('/sorteo', [\App\Http\Controllers\SorteoController::class, 'store'])->name('sorteo');

Route::get('/migrate', function () {
    Artisan::call('migrate', ['--force' => true]);
    return 'Migrated';
});

Route::get('/talleribarra', function () {
    return view('taller-ibarra');
})->name('talleribarra');

Route::get('/tallerduran', function () {
    return view('taller-duran');
})->name('tallerduran');

Route::get('/tallerpuembo', function () {
    return view('taller-puembo');
})->name('tallerpuembo');

Route::get('/tallermanta', function () {
    return view('taller-manta');
})->name('tallermanta');

Route::get('/tallertulcan', function () {
    return view('taller-tulcan');
})->name('tallertulcan');
