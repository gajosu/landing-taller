<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');

Route::post('/inscribe', [\App\Http\Controllers\InscriptionController::class, 'store'])->name('inscribe');
