<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('landing-page.index');
})->name('index');
