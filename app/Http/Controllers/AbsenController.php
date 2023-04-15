<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Karyawan;
use Illuminate\Support\Carbon;


class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd(Session::get('data'));
        // return Absen::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    public function getAttendances()
    {

    }

    public function check() {
        
    }
    public function datang($request)
    {
        $karyawan = new Karyawan();
        $karyawan = $karyawan->show($request['id']);
        if (!$karyawan) 
            return 'data pengguna tidak ditemukan';

        $timestamp = Carbon::parse($request['timestamp']);
        $data = Absen::where('id_karyawan', $request['id'])
                    ->where('tanggal', $timestamp->format('Y-m-d'))
                    ->first();
                    
        if($data == null) {
            $hasil = Absen::create([
                        'id_karyawan' => $request['id'],
                        'tanggal' => $timestamp->format('Y-m-d'),
                        'jam_masuk' => $timestamp->format('h:i:s'),
                        'tanggal_tarik_data' => Carbon::now(),
                    ]);
            return $hasil?true:false;
        }
        return true;

    }

    public function pulang($request)
    {
        $timestamp = Carbon::parse($request['timestamp']);
        $data = Absen::where('id_karyawan', $request['id'])
                    ->where('tanggal', $timestamp->format('Y-m-d'))
                    ->first();
        if($data == null) {
            $hasil = Absen::create([
                        'id_karyawan' => $request['id'],
                        'tanggal' => $timestamp->format('Y-m-d'),
                        'jam_pulang' => $timestamp->format('h:i:s'),
                        'tanggal_tarik_data' => Carbon::now(),
                    ]);
        } else {
            $hasil = Absen::where('id_karyawan', $request['id'])
                        ->where('tanggal', $timestamp->format('Y-m-d'))
                        ->update(['jam_pulang' => $timestamp->format('h:i:s')]);
        }
        return $hasil;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
