<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiskController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/create/disk', [DiskController::class, 'create'])->name('create.disk');
