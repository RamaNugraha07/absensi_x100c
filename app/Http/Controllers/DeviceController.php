<?php

namespace App\Http\Controllers;

use Rats\Zkteco\Lib\ZKTeco;

class DeviceController extends Controller
{
    public function getAttendances()
    {
        $zk = new ZKTeco('192.168.1.56',4370);
        $zk->connect();
        $data = $zk->getAttendance();
        foreach ($data as $datum) {
            $controller = new AbsenController();
            if($datum['type'] == 0) 
                $hasil = $controller->datang($datum);
            else 
                $hasil = $controller->pulang($datum);

            if($hasil == "data pengguna tidak ditemukan")
                return response([
                    'message' => 'Data Pengguna tidak ditemukan: id = ' .$datum['id']
                ],404);
        }

        if($hasil) {
            $zk->clearAttendance();
            return response([
                'message' => 'Data berhasil disimpan'
            ],201);
        }

        return response([
            'message' => 'Beberapa data mungkin belum tersimpan, silahkan coba lagi'
        ],206);
    }
}
