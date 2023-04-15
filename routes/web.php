<?php

use Rats\Zkteco\Lib\ZKTeco;
use Rats\Zkteco\Lib\Helper\Device;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\DeviceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::get('/', [DeviceController::class, 'getAttendances']);
Route::resource('absen', AbsenController::class)->except('store','update');
route::post('/absen', [AbsenController::class, 'store']);
