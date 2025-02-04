<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormRecordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminFormController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/marcas', function () {
    return view('home.brands');
})->name('marcas');

Route::get('/contacto', function () {
    return view('home.contact');
})->name('contact');

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

Route::get('/tallerimpromafer', function () {
    return view('impromafer');
})->name('tallerimpromafer');

Route::get('/tallercomercialaaguilar', function () {
    return view('comercial-aaguilar');
})->name('tallercomercialaaguilar');

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


Route::get('/marcas/black-and-decker', function () {
    return view('home.brands.black-and-decker', [
        'siteTitle' => 'Black & Decker',
        'meta_description' => 'Black & Decker'
    ]);
})->name('marcas.black-and-decker');

Route::get('/marcas/dewalt', function () {
    return view('home.brands.dewalt', [
        'siteTitle' => 'Dewalt',
        'meta_description' => 'Dewalt'
    ]);
})->name('marcas.dewalt');

Route::get('/marcas/stanley', function () {
    return view('home.brands.stanley', [
        'siteTitle' => 'Stanley',
        'meta_description' => 'Stanley'
    ]);
})->name('marcas.stanley');

Route::get('/marcas/craftsman', function () {
    return view('home.brands.craftsman', [
        'siteTitle' => 'Craftsman',
        'meta_description' => 'Craftsman'
    ]);
})->name('marcas.craftsman');

Route::get('/marcas/irwin', function () {
    return view('home.brands.irwin', [
        'siteTitle' => 'Irwin',
        'meta_description' => 'Irwin'
    ]);
})->name('marcas.irwin');

Route::get('/marcas/proto', function () {
    return view('home.brands.proto', [
        'siteTitle' => 'Proto',
        'meta_description' => 'Proto'
    ]);
})->name('marcas.proto');

// Rutas públicas para formularios
Route::get('/forms/{slug}', [FormController::class, 'show'])->name('forms.show');
Route::post('/forms/{slug}/register', [FormRecordController::class, 'store'])->name('forms.register');

// Rutas públicas para listados por tipo
Route::get('/eventos', [FormController::class, 'events'])->name('forms.events');
Route::get('/capacitaciones', [FormController::class, 'trainings'])->name('forms.trainings');
Route::get('/promociones', [FormController::class, 'promotions'])->name('forms.promotions');

// Rutas del panel de administración
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/forms', [AdminFormController::class, 'index'])->name('admin.forms.index');
    Route::get('/forms/create', [AdminFormController::class, 'create'])->name('admin.forms.create');
    Route::post('/forms', [AdminFormController::class, 'store'])->name('admin.forms.store');
    Route::get('/forms/{form}/edit', [AdminFormController::class, 'edit'])->name('admin.forms.edit');
    Route::put('/forms/{form}', [AdminFormController::class, 'update'])->name('admin.forms.update');
    Route::delete('/forms/{form}', [AdminFormController::class, 'destroy'])->name('admin.forms.destroy');
    Route::get('/forms/{form}/records', [AdminFormController::class, 'records'])->name('admin.forms.records');
    Route::get('/forms/{form}/records/export', [AdminFormController::class, 'export'])->name('admin.forms.export');
});

// Ruta de autenticación
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Ruta para la política de privacidad
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');
