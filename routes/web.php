<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\BagController;
 
Route::get('/', [IndexController::class, 'index']);

// Route::get('/Shop', [HomeController::class, 'index']);

Route::get('/PurchaseNow/Perfumes/{ProductId}', [PerfumeController::class, 'show']); 
Route::get('/Perfumes', [PerfumeController::class, 'index'])->name('Perfumes');

Route::get('/Bags', [BagController::class, 'index'])->name('Bags');
Route::get('/PurchaseNow/Bags/{ProductId}', [BagController::class, 'show']); 

