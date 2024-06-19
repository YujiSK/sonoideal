<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('raspi')->group(function () {
    Route::get('/test/connection', function () {
        return response()->json(['message' => 'Hello! You are connected to Laravel!']);
    });
    Route::post('/sensor/store', [SensorController::class, 'store'])->name('sensor.store');
});