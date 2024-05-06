<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/eleves', [EleveController::class, 'index'])->name('eleves.index');
Route::get('/create', [EleveController::class, 'create'])->name('eleves.create');
Route::post('/store', [EleveController::class, 'store'])->name('eleves.store');
Route::get('/eleves/{id}', [EleveController::class, 'show'])->name('eleves.show');
Route::get('/eleves/{id}/edit', [EleveController::class, 'edit'])->name('eleves.edit');
Route::put('/eleves/{id}', [EleveController::class, 'update'])->name('eleves.update');