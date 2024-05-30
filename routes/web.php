<?php

// use App\Http\Controllers\;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(KategoriController::class)->group(function() {
        Route::get('/kategori', 'index')->name('kategori');
        Route::get('/kategori-add', 'create')->name('kategori.add');
        Route::get('/kategori-edit/{id}', 'edit')->name('kategori.edit');
        Route::post('/kategori', 'store')->name('kategori.perform');
        Route::put('/kategori-update/{id}', 'update')->name('kategori.update');
        Route::delete('/kategori-delete/{id}', 'destroy')->name('kategori.delete');
    });


});
