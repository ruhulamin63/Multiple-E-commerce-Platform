<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

// Main SPA route - handles all frontend routes
Route::get('/{any}', [HomeController::class, 'index'])->where('any', '^(?!api|admin).*$')->name('spa');

// Fallback route for any unmatched routes
Route::fallback(function () {
    return redirect('/');
});