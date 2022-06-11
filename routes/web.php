<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\BagController;
use App\Http\Controllers\SingletController;
use App\Http\Controllers\BoxerController;
 
Route::get('/', [IndexController::class, 'index']);

// Route::get('/Shop', [HomeController::class, 'index']);

Route::get('/PurchaseNow/Perfumes/{ProductId}', [PerfumeController::class, 'show']); 
Route::get('/Perfumes', [PerfumeController::class, 'index'])->name('Perfumes');

Route::get('/Bags', [BagController::class, 'index'])->name('Bags');
Route::get('/PurchaseNow/Bags/{ProductId}', [BagController::class, 'show']); 

Route::get('/Singlets', [SingletController::class, 'index'])->name('Singlets');
Route::get('/PurchaseNow/Singlets/{ProductId}', [SingletController::class, 'show']); 

Route::get('/Boxers', [BoxerController::class, 'index'])->name('Boxers');
Route::get('/PurchaseNow/Boxers/{ProductId}', [BoxerController::class, 'show']); 