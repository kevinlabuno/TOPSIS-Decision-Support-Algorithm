<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\BerandaController;
Route::get('/', function () {
    return view('beranda');
});

Route::get('bobot', [PerhitunganController::class, 'bobot'])->name('bobot');
Route::post('bobot', [PerhitunganController::class, 'bobot_post'])->name('bobot.post');
Route::get('perhitungan', [PerhitunganController::class ,'index'])->name('perhitungan');
Route::get('beranda', [BerandaController::class ,'index'])->name('beranda');
Route::get('algoritma', [BerandaController::class ,'algoritma'])->name('algoritma');

Route::get('/pilihac', [PerhitunganController::class, 'pemilihan'])->name('pilihac');
Route::post('/pilihac/update', [PerhitunganController::class, 'update'])->name('pilihac.update');
Route::get('priview', [PerhitunganController::class, 'priview'])->name('priview');

