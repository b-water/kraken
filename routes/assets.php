<?php

Route::middleware(['auth:sanctum', 'verified'])->get('/assets', function () {
    return Inertia\Inertia::render('AssetsPage');
})->name('assets');


Route::middleware(['auth:sanctum', 'verified'])->get('/assets/add', function () {
    return Inertia\Inertia::render('Asset/AddPage');
})->name('assets/add');

Route::middleware(['auth:sanctum', 'verified'])->post('/assets/add', function () {

})->name('assets/add');
