<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'index'])->name('index');

Route::get('/{locale?}/cv/', [PageController::class,'cv'])->name('cv');
