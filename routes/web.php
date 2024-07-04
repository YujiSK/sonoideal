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
    return view('home');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/newlogin', function () {
    return view('newlogin');
})->name('newlogin');
Route::get('/login-2', function () {
    return view('login-2');
})->name('login-2');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/manualcontrol', function () {
    return view('manualcontrol');
})->name('manualcontrol');
Route::get('/setting', function () {
    return view('setting');
})->name('setting');
Route::get('/sensorcontrol', function () {
    return view('sensorcontrol');
})->name('sensorcontrol');
Route::get('/Remotecontrol-1', function () {
    return view('Remotecontrol-1');
})->name('Remotecontrol-1');
Route::get('/Remotecontrol-2', function () {
    return view('Remotecontrol-2');
})->name('Remotecontrol-2');
Route::get('/Remotecontrol-3', function () {
    return view('Remotecontrol-3');
})->name('Remotecontrol-3');

Route::get('raspi/csrf', function () {return view('raspi.csrf');})->name('Remotecontrol-3');
Route::get('raspi/sensor/index', [SensorController::class, 'index']);
Route::post('/line/webhook', [LineWebhookController::class, 'handle']);