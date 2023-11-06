<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DemoController;

 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return Inertia::render('Test');
});

    Route::get('/demo', [DemoController::class, 'index']);
