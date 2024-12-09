<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/menu', [MenuController::class, 'index'])->name('menu');
});
require __DIR__.'/auth.php';
