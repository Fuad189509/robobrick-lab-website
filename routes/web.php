<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Simple test route to check if Laravel is running
Route::get('/test-laravel', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'Laravel is running!',
        'laravel_version' => app()->version(),
        'php_version' => phpversion(),
    ]);
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/program', [PageController::class, 'program'])->name('program');
Route::get('/layanan', [PageController::class, 'services'])->name('services');
Route::get('/legalitas', [PageController::class, 'legal'])->name('legal');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::get('/admin-preview', [PageController::class, 'adminPreview'])->name('admin-preview');
