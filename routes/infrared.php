<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IRController;

Route::post('/sendInfraRed', [IRController::class, 'sendInfraRed']);
Route::get('/testInfraRed', [IRController::class, 'testInfraRed']);

Route::view('/necConversion', 'infrared.necConversion')->name('necConversion');
Route::post('/convertToNEC', [IRController::class, 'convertToNEC'])->name('convertToNEC');
Route::post('/convertToTXT', [IRController::class, 'convertToTXT'])->name('convertToTXT');

Route::post('/send-ir', [IRController::class, 'sendIR']);
Route::get('/send-to-arduino', [IRController::class, 'sendToArduino']);
