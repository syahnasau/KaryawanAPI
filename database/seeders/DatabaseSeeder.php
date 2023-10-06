<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Divisi;
use App\Models\Karyawan;
use App\Models\Penggajian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Divisi::create([
            "nama_divisi" => "Accounting & Financial",
        ]);
        Divisi::create([
            "nama_divisi" => "IT Support",
        ]);
        Divisi::create([
            "nama_divisi" => "Sales & Marketing",
        ]);

        Karyawan::create([
            "no_karyawan" => "0012345",
            "nama_karyawan" => "Januar Wahyu",
            "divisi_id" => 2,
            "jk_karyawan" => "L",
            "tempat_lahir" => "Jakarta",
            "tanggal_lahir" => "2000-08-11",
            "no_telp" => "080011223344",
            "alamat" => "Jl. Ciracas, Jakarta Timur"
        ]);
        Karyawan::create([
            "no_karyawan" => "0012346",
            "nama_karyawan" => "Felicia Agungra",
            "divisi_id" => 1,
            "jabatan" => "Manajer",
            "jk_karyawan" => "P",
            "tempat_lahir" => "Jakarta",
            "tanggal_lahir" => "1999-08-11",
            "no_telp" => "080011223300",
            "alamat" => "Jl. Cawang, Jakarta Timur"
        ]);
        Karyawan::create([
            "no_karyawan" => "0012346",
            "nama_karyawan" => "Rendi Sanjaya",
            "divisi_id" => 3,
            "jabatan" => "Pegawai",
            "jk_karyawan" => "P",
            "tempat_lahir" => "Jakarta",
            "tanggal_lahir" => "1999-08-11",
            "no_telp" => "080011223300",
            "alamat" => "Jl. Durian, Jakarta Timur"
        ]);

        Penggajian::create([
            "tanggal" => "2023-09-25",
            "keterangan" => "Gaji bulan September 2023 dengan sedikit bonus karena kerja keras",
            "karyawan_id" => "1",
            "jumlah_gaji" => 2000000,
            "potongan" => 50000,
            "total_gaji_diterima" => 1950000
        ]);


    }
}
