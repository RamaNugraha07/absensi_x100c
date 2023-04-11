<?php

namespace App\Http\Controllers;

use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;

class FingerController extends Controller
{
    public function index()
    {
        $device = new ZKTeco('192.168.1.5', 4370);

        $device->connect();

        $data = $device->getAttendance();
        
        dd($data);
    }
}
