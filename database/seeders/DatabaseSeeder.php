<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Admin Perpustakaan
        User::create([
            'name' => 'Zayyan Arkananta',
            'email' => 'zayyan.admin@perpustakaan.test',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'kelas' => null,
        ]);

        // 2. Akun Siswa (Contoh 1)
        User::create([
            'name' => 'Kaelen Pradipta',
            'email' => 'kaelen.rpl@siswa.test',
            'password' => Hash::make('password'),
            'role' => 'siswa',
            'kelas' => 'XII RPL 2',
        ]);

        // 3. Akun Siswa (Contoh 2)
        User::create([
            'name' => 'Nareswari Kirana',
            'email' => 'nareswari.rpl@siswa.test',
            'password' => Hash::make('password'),
            'role' => 'siswa',
            'kelas' => 'XI RPL 1',
        ]);

        // 4. Data Awal Buku (Sesuaikan nama kolom dengan tabel bukus di Langkah 4)
        $daftarBuku = [
            [
                'judul' => 'Arsitektur Perangkat Lunak Modern',
                'penulis' => 'Damar Baskara',
                'penerbit' => 'Cakrawala Kode',
                'tahun_terbit' => '2025',
                'stok' => 6,
            ],
            [
                'judul' => 'Algoritma dan Struktur Data Terapan',
                'penulis' => 'Raden Wijaya Kusuma',
                'penerbit' => 'Pustaka Teknologi',
                'tahun_terbit' => '2024',
                'stok' => 4,
            ],
            [
                'judul' => 'Jejak Langkah di Ujung Timur',
                'penulis' => 'Saraswati Maheswari',
                'penerbit' => 'Lentera Nusantara',
                'tahun_terbit' => '2023',
                'stok' => 5,
            ],
        ];

        foreach ($daftarBuku as $buku) {
            Buku::create($buku);
        }
    }
}