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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_organisasi');
            $table->string('judul_acara');
            $table->string('jenis_acara')->nullable();
            $table->integer('jumlah_peserta');
            $table->date('tgl_mulai');
            $table->string('tgl_selesai');
            $table->text('deskripsi');
            $table->string('status')->default('Menunggu Konfirmasi');
            $table->softDeletes();
            $table->timestamps();
            
            $table->string('user_id')->nullable();
            $table->foreign('user_id')->references('email')->on('users');
            // $table->unsignedBigInteger('user_id')->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->unsignedBigInteger('layanan_id')->nullable();
            // $table->foreign('layanan_id')->references('id')->on('layanan');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
// Schema::create('booking', function (Blueprint $table) {
//     $table->id();
//     $table->string('nama_lengkap');
//     $table->string('nama_organisasi');
//     $table->string('judul_acara');
//     $table->string('jenis_acara');
//     $table->integer('jumlah_peserta');
//     $table->string('jadwal_mulai');
//     $table->string('jadwal_selesai');
//     $table->text('deskripsi');
//     $table->softDeletes();
//     $table->timestamps();
// });