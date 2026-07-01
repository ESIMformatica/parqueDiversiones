<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mirror', MirrorController::class)->name('mirror');
Route::get('/fall', FallController::class)->name('fall');
Route::get('/roller', RollerController::class)->name('roller');
Route::get('/boo', BooController::class)->name('boo');
Route::get('/carousel', CarouselController::class)->name('carousel');
Route::get('/pirate', PirateController::class)->name('pirate');
Route::get('/worm', WormController::class)->name('worm');
Route::get('/kamikaze', KamikazeController::class)->name('kamikaze');