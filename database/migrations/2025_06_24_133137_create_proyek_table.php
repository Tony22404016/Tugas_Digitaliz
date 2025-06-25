<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->id('id_proyek'); // Primary key custom
            $table->string('nama_proyek');
            $table->string('client');
            $table->string('kepala_proyek');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('kemajuan'); // Asumsi tipe integer (0-100%)
            // $table->timestamps(); // Dihapus karena di Model $timestamps = false
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('proyek');
    }
};