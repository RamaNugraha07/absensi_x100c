<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Absen extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'id_karyawan',
        'tanggal',
        'jam_masuk',
        'jam_pulang',
        'tgl_tarik_data',
    ];

    public function karyawan(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class);
    }
}
