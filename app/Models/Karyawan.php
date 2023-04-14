<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'id',
        'nama',
        'jenis_kelamin',
        'divisi',
        'status',
        'jabatan',
        'data_finger',
    ];

    protected $cast = 
    [
        'id' => 'integer',
        'data_finger' => Hash::class.':sha256',
    ];
}
