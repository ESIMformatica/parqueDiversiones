<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MirrorController;
use App\Http\Controllers\FallController;
use App\Http\Controllers\RollerController;
use App\Http\Controllers\BooController;
use App\Http\Controllers\CarrouselController;
use App\Http\Controllers\PirateController;
use App\Http\Controllers\WormController;
use App\Http\Controllers\KamikazeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mirror', [MirrorController::class, 'index'])->name('mirror');
Route::get('/fall', [FallController::class, 'index'])->name('fall');
Route::get('/roller', [RollerController::class, 'index'])->name('roller');
Route::get('/boo', [BooController::class, 'index'])->name('boo');
Route::get('/carousel', [CarrouselController::class, 'index'])->name('carousel');
Route::get('/pirate', [PirateController::class, 'index'])->name('pirate');
Route::get('/worm', [WormController::class, 'index'])->name('worm');
Route::get('/kamikaze', [KamikazeController::class, 'index'])->name('kamikaze');