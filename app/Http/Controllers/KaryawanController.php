<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawanData = Karyawan::all();
        return response()->json([
            "Message" => "Berhasil Mendapatkan Karyawan",
            "data" => $karyawanData
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create(Request $request)
    {
        $dataDivisi = $request->all();
        Karyawan::create([
            "no_karyawan" => $request-> no_karyawan,
            "nama_karyawan" => $request-> nama_karyawan,
            "divisi_id" => $request-> divisi_id,
            "jabatan" => $request-> jabatan,
            "jk_karyawan" => $request-> jk_karyawan,
            "tempat_lahir" => $request-> tempat_lahir,
            "tanggal_lahir" => $request-> tanggal_lahir,
            "no_telp" => $request-> no_telp,
            "alamat" => $request-> alamat
        ]);
        if(!$dataDivisi) return response()->json([
            "Message" => "Gagal membuat Karyawan"
        ], 400);
        return response()->json([
            "Message" => "Berhasil membuat Karyawan",
            "Data" => $dataDivisi
        ], 200);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * 
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
    
     */
    public function show(string $id)
    {
        $data = Karyawan::find($id);
        if(!$data) return response()->json([
            "Message" => "Gagal melihat Karyawan"
        ], 400);
        return response()->json([
            "Message" => "Berhasil melihat Karyawan",
            "Data" => $data
        ], 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     
     */
    public function update(Request $request, string $id)
    {
        $data = Karyawan::find($request->id);
        $updateData = $data->update([
            "nama_karyawan" => $request-> nama_karyawan,
            "divisi_id" => $request-> divisi_id,
            "jabatan" => $request-> jabatan,
            "jk_karyawan" => $request-> jk_karyawan,
            "tempat_lahir" => $request-> tempat_lahir,
            "tanggal_lahir" => $request-> tanggal_lahir,
            "no_telp" => $request-> no_telp,
            "alamat" => $request-> alamat
        ]);

        if(!$updateData) return response()->json([
            "Message" => "Gagal Mengupdate Karyawan",
        ],500);

        return response()->json([
            "Message" => "Berhasil Mengupdate Karyawan",
            "data" => $updateData
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
    
     */
    public function destroy(string $id)
    {
        $dataToDelete = Karyawan::find($id);
        $delete = $dataToDelete->delete();
        if(!$delete) return response()->json([
            "Message" => "Gagal Hapus Karyawan"
        ], 400);

        return response()->json([
            "Message" => "Berhasil Hapus Karyawan",
        ], 200);
    }
}
