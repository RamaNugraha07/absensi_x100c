<?php

use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Support\Facades\Route;

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


route::get('/', function () {
    $data = new ZKTeco('192.168.1.56',4370);
    $data->connect();
    dd($data->getUser());
});