<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FingerController extends Controller
{
    protected $zk;

    public function __construct()
    {
        
    }

    
    public function index()
    {

    }

    public function storeAttendance() : RedirectResponse
    {
        dd("aa");
        // $zk = new ZKTeco('192.168.1.56', 4370);
        // $zk->connect();
        // $data = $zk->getAttendance();
        // return Redirect::route('absen.store',$data);

    }
}
