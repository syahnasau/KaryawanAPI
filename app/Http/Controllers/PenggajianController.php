<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use Illuminate\Http\Request;

class PenggajianController extends Controller
{
    public function index()
    {
        $penggajianData = Penggajian::all();
        return response()->json([
            "Message" => "Berhasil Mendapatkan Penggajian",
            "data" => $penggajianData
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create(Request $request)
    {
        $penggajianData = $request->all();
        Penggajian::create([
            "tanggal" => $request->tanggal,
            "keterangan" => $request->keterangan,
            "karyawan_id" => $request->karyawan_id,
            "jumlah_gaji" => $request->jumlah_gaji,
            "potongan" => $request->potongan,
            "total_gaji_diterima" => $request->total_gaji_diterima
        ]);
        if(!$penggajianData) return response()->json([
            "Message" => "Gagal membuat Penggajian"
        ], 400);
        return response()->json([
            "Message" => "Berhasil membuat Penggajian",
            "Data" => $penggajianData
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
        $data = Penggajian::find($id);
        if(!$data) return response()->json([
            "Message" => "Gagal melihat Penggajian"
        ], 400);
        return response()->json([
            "Message" => "Berhasil melihat Penggajian",
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
        $data = Penggajian::find($request->id);
        $updateData = $data->update([
            "tanggal" => $request->tanggal,
            "keterangan" => $request->keterangan,
            "karyawan_id" => $request->karyawan_id,
            "jumlah_gaji" => $request->jumlah_gaji,
            "potongan" => $request->potongan,
            "total_gaji_diterima" => $request->total_gaji_diterima
        ]);

        if(!$updateData) return response()->json([
            "Message" => "Gagal Mengupdate Penggajian",
        ],500);

        return response()->json([
            "Message" => "Berhasil Mengupdate Penggajian",
            "data" => $updateData
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
    
     */
    public function destroy(string $id)
    {
        $dataToDelete = Penggajian::find($id);
        $delete = $dataToDelete->delete();
        if(!$delete) return response()->json([
            "Message" => "Gagal Hapus Penggajian"
        ], 400);

        return response()->json([
            "Message" => "Berhasil Hapus Penggajian",
        ], 200);
    }
}
