<?php

use App\Http\Controllers\SpeechController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SpeechController::class, 'index']);
Route::post('/speak', [SpeechController::class, 'speak'])->name('speak');
