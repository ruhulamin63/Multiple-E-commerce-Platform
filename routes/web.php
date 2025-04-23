<?php


use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return redirect()->route('install.initialize');
    // return redirect('/');
    abort(404);  // Returns a 404 not found error
});