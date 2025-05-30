<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('manufakturs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->date('tanggal_pemeriksaan');
            $table->string('nama_mesin');
            $table->string('nomor_mesin');
            $table->string('kondisi_mesin'); 
            $table->string('komponen_kerusakan')->nullable();
            $table->string('perawatan_besar');
            $table->text('catatan_kelayakan')->nullable();//--catatan sistem berdasarkan logika--//;
            $table->string('action_data')->default(); //--aksi yang diambil berdasarkan logika sistem--//;
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
    */

    function down(): void
    {
        Schema::dropIfExists('manufakturs');
    }
};