<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    // Untuk ganti format tanggal
    protected $casts = [ 'tgl_mulai'=>'datetime', 'tgl_selesai'=>'datetime'];

    protected $fillable = [
        'nama_lengkap',
        'nama_organisasi',
        'judul_acara',
        'jenis_acara',
        'jumlah_peserta',
        'tgl_mulai',
        'tgl_selesai',
        'deskripsi',
        'user_id',
        'layanan_id',
        'status'
    ];
}
