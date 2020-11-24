<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::prefix('accounts')->middleware(['auth' ,'verified'])->group( static function () {

    Route::get('/', [AccountController::class, 'collection'])->name('accounts');

    Route::get('/add', static function () {
        return Inertia\Inertia::render('Account/AddPage');
    })->name('accounts/add');

    Route::get('/import/finanzguru', static function () {
        return Inertia\Inertia::render('Account/ImportPage');
    })->name('accounts/import');

    Route::post('/add', [AccountController::class, 'add'])->name('accounts/add');
    Route::post('/import/finanzguru', [AccountController::class, 'import'])->name('accounts/importFinanzguru');
});
