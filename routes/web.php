<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\PageContentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('admin/projects', ProjectController::class);
    Route::resource('admin/posts', PostController::class);
    Route::resource('admin/testimonials', TestimonialController::class);
    Route::get('admin/page-content', [PageContentController::class, 'index'])->name('page-content.index');
    Route::post('admin/page-content', [PageContentController::class, 'update'])->name('page-content.update');
});

require __DIR__.'/auth.php';
