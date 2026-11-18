
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MirrorController;
use App\Http\Controllers\FallController;
use App\Http\Controllers\RollerController;
use App\Http\Controllers\BooController;
use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\PirateController;
use App\Http\Controllers\WormController;
use App\Http\Controllers\KamikazeController;

// Página principal
Route::view('/', 'pages.inicio')->name('inicio');

// Páginas generales
Route::view('/inicio', 'pages.inicio')->name('inicio.page');
Route::view('/preguntas-frecuentes', 'pages.preguntas')
    ->name('preguntas');

// Atracciones
Route::get('/mirror', [MirrorController::class, 'index'])->name('mirror');
Route::get('/fall', [FallController::class, 'index'])->name('fall');
Route::get('/roller', [RollerController::class, 'index'])->name('roller');
Route::get('/boo', [BooController::class, 'index'])->name('boo');
Route::get('/carousel', [CarrouselController::class, 'index'])->name('carousel');
Route::get('/pirate', [PirateController::class, 'index'])->name('pirate');
Route::get('/worm', [WormController::class, 'index'])->name('worm');
Route::get('/kamikaze', [KamikazeController::class, 'index'])->name('kamikaze');

// Dashboard protegido
Route::get('/dashboard', function () {
    return redirect()->route('profile.edit');
})->middleware(['auth', 'verified'])->name('dashboard');

// Perfil de usuario
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Autenticación
require __DIR__.'/auth.php';
