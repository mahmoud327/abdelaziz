<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\banersController;
use App\Http\Controllers\contectsController;
use App\Http\Controllers\massagesController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\banersController as UserBanersController;
use App\Http\Controllers\User\photosController as UserPhotosController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    // Route::get('/', function () {
    //     return view('front.home');
    // });
    Route::get('/', [UserPhotosController::class, 'index'])->name('/');
    Route::resource('/', UserBanersController::class);
    Route::resource('/massage', massagesController::class);
    Route::resource('/portfolio', UserPhotosController::class);
    Route::view('/about', 'front.about');
    Route::view('/services', 'front.sirv');
    // Route::view('/photos', 'admin.photos.index');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::resource('/photos', PhotosController::class);
        Route::resource('/baners', banersController::class);
        Route::resource('/contects', contectsController::class);
    });



require __DIR__ . '/auth.php';
