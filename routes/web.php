<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->redirectToRoute('dewalt');
});

Route::get('/dewalt', function () {
    return view('welcome');
})->name('dewalt');

Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');

Route::post('/inscribe', [\App\Http\Controllers\InscriptionController::class, 'store'])->name('inscribe');
