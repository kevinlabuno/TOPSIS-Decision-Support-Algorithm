<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerhitunganController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('bobot', [PerhitunganController::class, 'bobot'])->name('bobot');
Route::post('bobot', [PerhitunganController::class, 'bobot_post'])->name('bobot.post');
Route::get('perhitungan', [PerhitunganController::class ,'index'])->name('perhitungan');

