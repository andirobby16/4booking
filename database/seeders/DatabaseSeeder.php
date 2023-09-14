<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \App\Models\User;
use \App\Models\Booking;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => 1
        ]);
        
        DB::table('layanan')->insert([
            'nama_layanan' => 'Project',
            'deksripsi_layanan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae atque laboriosam maxime modi',
            'tombol_layanan' => 'Atur Jadwal',
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Seminar',
            'deksripsi_layanan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae atque laboriosam maxime modi',
            'tombol_layanan' => 'Atur Jadwal',
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Konsultasi',
            'deksripsi_layanan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae atque laboriosam maxime modi',
            'tombol_layanan' => 'Atur Jadwal',
        ]);
        DB::table('layanan')->insert([
            'nama_layanan' => 'Magang',
            'deksripsi_layanan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae atque laboriosam maxime modi',
            'tombol_layanan' => 'Atur Jadwal',
        ]);
    }
}
