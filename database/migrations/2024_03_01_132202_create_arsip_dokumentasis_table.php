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
        Schema::create('arsip_dokumentasis', function (Blueprint $table) {
            $table->id('id_arsip');
            $table->foreignId('id_kelas')->references('id_kelas')->on('kelases');
            $table->integer('karung_kiloan');
            $table->date('tgl_pengiriman');
            $table->date('tgl_setor');
            $table->foreignId('id_pj')->references('id_pj')->on('penanggung_jawabs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsip_dokumentasis');
    }
};
