<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class,'index'])->name('home');
Route::get('/resume', [PublicController::class,'index'])->name('resume');
Route::get('/jobs', [PublicController::class,'index'])->name('jobs');
Route::get('/blog', [PublicController::class,'index'])->name('blog');
Route::get('/contact', [PublicController::class,'index'])->name('contact');
