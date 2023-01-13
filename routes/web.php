<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);



//Prefix untuk /master
Route::prefix('master')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Kategori
    Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('get.kategori');
    Route::get('/kategori/create', [App\Http\Controllers\KategoriController::class, 'create'])->name('create.kategori');
    Route::post('/kategori/store', [App\Http\Controllers\KategoriController::class, 'store'])->name('store.kategori');
    Route::get('/kategori/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit'])->name('edit.kategori');
    Route::patch('/kategori/{id}/update', [App\Http\Controllers\KategoriController::class, 'update'])->name('update.kategori');
    Route::delete('/kategori/{id}/delete', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('delete.kategori');

    //SubKategori
    Route::get('/sub-kategori', [App\Http\Controllers\SubKategoriController::class, 'index'])->name('get.sub-kategori');
    Route::get('/sub-kategori/create', [App\Http\Controllers\SubKategoriController::class, 'create'])->name('create.sub-kategori');
    Route::post('/sub-kategori/store', [App\Http\Controllers\SubKategoriController::class, 'store'])->name('store.sub-kategori');
    Route::get('/sub-kategori/{id}/edit', [App\Http\Controllers\SubKategoriController::class, 'edit'])->name('edit.sub-kategori');
    Route::patch('/sub-kategori/{id}/update', [App\Http\Controllers\SubKategoriController::class, 'update'])->name('update.sub-kategori');
    Route::delete('/sub-kategori/{id}/delete', [App\Http\Controllers\SubKategoriController::class, 'destroy'])->name('delete.sub-kategori');

});

// No Prefix and Middleware Auth & Verified
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

    // Profile
    Route::get('/my-profile/{id}', [App\Http\Controllers\ProfileController::class, 'create'])->name('profile.home');
    Route::patch('/my-profile/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    // Get Files
    Route::get('/files/profile-picture/{namaFile}', [App\Http\Controllers\FilesController::class, 'showProfilePicture']);
});


