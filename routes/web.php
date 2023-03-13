<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanKuliahController;

Route::get('/', function () {
    return view('app');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index']); 

Route::prefix('products')->group(function(){
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/permen', [ProductController::class, 'permen']);
    Route::get('/astor', [ProductController::class, 'astor']);
    Route::get('/biskuit', [ProductController::class, 'biskuit']);
});

Route::get('/news/{id}', [NewsController::class, 'index']);

Route::prefix('program')->group(function(){
    Route::get('/', [ProgramController::class, 'index']);
    Route::get('/kerja', [ProgramController::class, 'kerja']);
    Route::get('/pemerintah', [ProgramController::class, 'pemerintah']);
});

Route::get('/about-us', [AboutUsController::class, 'index']); 

Route::resource('/contact-us', ContactUsController::class) -> only(["index"]); 

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/curhat', [PengalamanKuliahController::class, 'index'])->name('pengalaman_kuliah');