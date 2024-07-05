<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;

Route::get('dashboard', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('articles', ArticleController::class);
});

require __DIR__.'/auth.php';
