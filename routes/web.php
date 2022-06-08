<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfumeController;
 
Route::get('/', [IndexController::class, 'index']);

Route::get('/Shop', [HomeController::class, 'index']);

Route::get('/PurchaseNow/{ProductId}', [PerfumeController::class, 'show']); 
Route::get('/Perfumes', [PerfumeController::class, 'index'])->name('Perfumes');

