<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('photos/index', [\App\Http\Controllers\PhotoController::class, 'index'])->name('photos.index');
        Route::get('photos/create', [\App\Http\Controllers\PhotoController::class, 'create'])->name('photos.create');
        Route::post('photos', [\App\Http\Controllers\PhotoController::class, 'store'])->name('photos.store');
        Route::get('photos/{photo}', [\App\Http\Controllers\PhotoController::class, 'show'])->name('photos.show');
        Route::get('photos/{photo}/edit', [\App\Http\Controllers\PhotoController::class, 'edit'])->name('photos.edit');
        Route::put('photos/{photo}', [\App\Http\Controllers\PhotoController::class, 'update'])->name('photos.update');
        Route::delete('photos/{photo}', [\App\Http\Controllers\PhotoController::class, 'destroy'])->name('photos.destroy');
        Route::resource('/students', StudentController::class);
        Route::resource('/journals', \App\Http\Controllers\JournalController::class);
        Route::resource('/teachers', \App\Http\Controllers\TeacherController::class);
    });
});
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/teachers', [App\Http\Controllers\HomeController::class, 'teachers'])->name('teachers');
Route::get('/students', [App\Http\Controllers\HomeController::class, 'students'])->name('students');
Route::get('/journals', [App\Http\Controllers\HomeController::class, 'journals'])->name('journals');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
