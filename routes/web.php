<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('auth/login', function () {
    return view('login');
})->name('login');
