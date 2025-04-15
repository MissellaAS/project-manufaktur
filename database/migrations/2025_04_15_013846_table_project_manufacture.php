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
        Schema::create('project_manufakturs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->string('nama_mesin');
            $table->string('nomor_mesin');
            $table->boolean('kondisi_mesin'); //--masih beropersi normal atau tidak--//
            $table->string('komponen_kerusakan')->nullable();
            $table->boolean('memerlukan_perawatanbesar_atau_tidak')->nullable(); 
            $table->text('catatan_kelayakan')->nullable();//--catatan sistem berdasarkan logika--//
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_manufakturs');
    }
};
