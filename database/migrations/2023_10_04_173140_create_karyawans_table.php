<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('no_karyawan',9);
            $table->string('nama_karyawan');
            $table->foreignId("divisi_id")->constrained()->onDelete('cascade');
            $table->enum('jabatan',["Manajer", "Supervisi", "Pegawai"]);
            $table->enum('jk_karyawan',["L", "P"]);
            $table->string('tempat_lahir',);
            $table->date('tanggal_lahir',);
            $table->char('no_telp',13);
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
};
