<?php

use Illuminate\Support\Facades\Route;

Route::prefix('accounts')->middleware(['auth' ,'verified'])->group( static function () {
    Route::get('/', static function () {
        return Inertia\Inertia::render('Accounts');
    })->name('accounts');

    Route::get('/add', static function () {
        return Inertia\Inertia::render('Account/Add');
    })->name('accounts/add');
});
