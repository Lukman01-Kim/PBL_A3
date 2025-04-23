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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_induk_siswa') -> index();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('kelas');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ayah');
            $table->string('penghasilan_ibu');
            $table->string('hp_ayah');
            $table->string('hp_ibu');
            $table->string('status');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
