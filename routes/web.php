<?php

use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FingerController;

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

// Route::get('/', FingerController::class, 'index');

route::get('/about', function () {
    $device = new ZKTeco('192.168.1.5', 4370);

        $device->connect();

        $data = $device->getAttendance();
        
        dd($data);
});