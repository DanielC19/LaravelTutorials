<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PilotController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Exam 1 routes
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/pilots', [PilotController::class, 'index'])->name('pilots.index');
Route::get('/pilots/create', [PilotController::class, 'create'])->name('pilots.create');
Route::post('/pilots/save', [PilotController::class, 'save'])->name('pilots.save');
Route::get('/pilots/stats', [PilotController::class, 'stats'])->name('pilots.stats');

Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/save', [ProductController::class, 'save'])->name('product.save');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
