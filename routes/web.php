<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/buat',[NoteController::class, 'create'])->name('notes.create');
Route::post('/simpan',[NoteController::class, 'store'])->name('notes.store');
Route::get('/ucapan/{slug}', [NoteController::class, 'show'])->name('notes.show');