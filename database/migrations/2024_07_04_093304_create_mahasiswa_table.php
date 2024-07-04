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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim_mahasiswa');
            $table->string('nama_mahasiswa');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', [
                'Laki-Laki',
                'Perempuan'
            ]);
            $table->unsignedBigInteger('id_jurusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
