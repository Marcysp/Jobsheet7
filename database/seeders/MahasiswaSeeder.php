<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'Nim' => 1,
            'Nama' => 'alvina',
            'Kelas' => 'TI2D',
            'Jurusan' => 'Teknologi Informasi',
            'No_Handphone' => '123456789',
            'Email' => 'alvina@mahasiswa.com',
            'TTL' => '12-03-2003',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 2,
            'Nama' => 'afi',
            'Kelas' => 'TI2D',
            'Jurusan' => 'Teknologi Informasi',
            'No_Handphone' => '123456789',
            'Email' => 'afi@mahasiswa.com',
            'TTL' => '13-03-2003',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 3,
            'Nama' => 'nanda',
            'Kelas' => 'TI2D',
            'Jurusan' => 'Teknologi Informasi',
            'No_Handphone' => '123456789',
            'Email' => 'nanda@mahasiswa.com',
            'TTL' => '12-06-2003',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 4,
            'Nama' => 'anisa',
            'Kelas' => 'TI2D',
            'Jurusan' => 'Teknologi Informasi',
            'No_Handphone' => '123456789',
            'Email' => 'anisa@mahasiswa.com',
            'TTL' => '14-01-2003',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 5,
            'Nama' => 'rofid',
            'Kelas' => 'TI2D',
            'Jurusan' => 'Teknologi Informasi',
            'No_Handphone' => '123456789',
            'Email' => 'rofid@mahasiswa.com',
            'TTL' => '21-10-2003',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 6,
            'Nama' => 'endar',
            'Kelas' => 'TI2D',
            'Jurusan' => 'Teknologi Informasi',
            'No_Handphone' => '123456789',
            'Email' => 'endar@mahasiswa.com',
            'TTL' => '12-08-2002',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 7,
            'Nama' => 'eka',
            'Kelas' => 'TI2D',
            'Jurusan' => 'Teknologi Informasi',
            'No_Handphone' => '123456789',
            'Email' => 'eka@mahasiswa.com',
            'TTL' => '11-03-2002',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 8,
            'Nama' => 'leli',
            'Kelas' => 'TI2D',
            'Jurusan' => 'Teknologi Informasi',
            'No_Handphone' => '123456789',
            'Email' => 'leli@mahasiswa.com',
            'TTL' => '23-05-2003',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
