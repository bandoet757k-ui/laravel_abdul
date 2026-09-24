<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/halo', function () {
    return "Halo, ini adalah route pertama saya!";
});

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/sapa/{nama}', [ProfilController::class, 'sapa']);

Route::get('/mapel', [ProfilController::class, 'mapel']);