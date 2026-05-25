<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/program', [PageController::class, 'program'])->name('program');
Route::get('/layanan', [PageController::class, 'services'])->name('services');
Route::get('/legalitas', [PageController::class, 'legal'])->name('legal');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::get('/admin-preview', [PageController::class, 'adminPreview'])->name('admin-preview');
