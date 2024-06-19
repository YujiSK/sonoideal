<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SensorController;
use App\Http\Controllers\LineWebhookController;

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

require __DIR__.'/api.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('raspi/sensor/index', [SensorController::class, 'index']);
Route::post('/line/webhook', [LineWebhookController::class, 'handle']);