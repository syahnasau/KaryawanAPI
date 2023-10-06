<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    // --------------------- Method ini digunakan untuk menampilkan daftar divisi. ---------------------
    // 200: OK atau Success 
    // 404: Not Found
    // 400: Bad Request atau permintaan tidak valid
    // 500: Internal Server Error = terjadi kesalahan di server


    public function index()
    {
        $divisiData = Divisi::all();  // = mengambil semua data divisi dari database
        return response()->json([
            "Message" => "Berhasil Mendapatkan Divisi",
            "data" => $divisiData
        ], 200);
    }

    // --------------------- Method ini digunakan untuk membuat divisi baru. ---------------------
    public function create(Request $request)
    {
        $dataDivisi = $request->all();
        Divisi::create([
            "nama_divisi" => $request->nama_divisi
        ]);
        if(!$dataDivisi) return response()->json([
            "Message" => "Gagal membuat Divisi"
        ], 400);
        return response()->json([
            "Message" => "Berhasil membuat Divisi",
            "Data" => $dataDivisi
        ], 200);
    }

    public function store(Request $request)
    {
        //
    }

    // --------------------- Method ini digunakan untuk melihat divisi tertentu. ---------------------
    public function show(string $id)
    {
        $data = Divisi::find($id);  //  mengambil data divisi berdasarkan ID
        if(!$data) return response()->json([
            "Message" => "Gagal melihat Divisi"
        ], 400);
        return response()->json([
            "Message" => "Berhasil melihat Divisi",
            "Data" => $data
        ], 200);
    }

    // --------------------- Method ini digunakan untuk memperbarui divisi. ---------------------
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request)
    {
        $data = Divisi::find($request->id);
        $updateData = $data->update([
            "nama_divisi" => $request->nama_divisi
        ]);

        if(!$updateData) return response()->json([
            "Message" => "Gagal Mengupdate Divisi",
        ],404);

        return response()->json([
            "Message" => "Berhasil Mengupdate Divisi",
            "data" => $updateData
        ],200);
    }

    // --------------------- Method ini digunakan untuk memperbarui divisi. ---------------------
    public function destroy(string $id)
    {
        $dataToDelete = Divisi::find($id);
        $delete = $dataToDelete->delete();
        if(!$delete) return response()->json([
            "Message" => "Gagal Hapus Anggota"
        ], 400);

        return response()->json([
            "Message" => "Berhasil Hapus",
        ], 200);
    }
}
