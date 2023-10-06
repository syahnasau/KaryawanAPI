<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $fillable = [
        "no_karyawan",
        "nama_karyawan",
        "divisi_id",
        "jabatan",
        "jk_karyawan",
        "tempat_lahir",
        "tanggal_lahir",
        "no_telp",
        "alamat"
    ];
}


