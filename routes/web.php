<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/investments', function () {
    return Inertia\Inertia::render('Investments');
})->name('investments');

Route::middleware(['auth:sanctum', 'verified'])->get('/accounts', function () {
    return Inertia\Inertia::render('Accounts');
})->name('accounts');

/**
Route::middleware(['auth:sanctum', 'verified'])->get('/budgets', function () {
    return Inertia\Inertia::render('Budgets');
})->name('budgets');
 **/
