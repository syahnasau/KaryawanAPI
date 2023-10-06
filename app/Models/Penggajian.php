<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    use HasFactory;
    protected $fillable = [
        "tanggal",
        "keterangan",
        "karyawan_id",
        "jumlah_gaji",
        "potongan",
        "total_gaji_diterima"
    ];
}