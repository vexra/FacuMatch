<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'landingPage'])->name('landing');
Route::get('/recommendation', [PageController::class, 'recommendationPage'])->name('recommendation');
Route::post('/get-recommendation', [RecommendationController::class, 'getRecommendation'])->name('get-recommendation');

Route::get('/', function () {
    return view('welcome');
});
