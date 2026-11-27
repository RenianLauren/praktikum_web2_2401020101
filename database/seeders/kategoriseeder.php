<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        Kategori::firstOrCreate(['nama' => 'Pemrograman']);
        Kategori::firstOrCreate(['nama' => 'Basis Data']);
        Kategori::firstOrCreate(['nama' => 'Jaringan Komputer']);
        Kategori::firstOrCreate(['nama' => 'Sistem Informasi']);
        Kategori::firstOrCreate(['nama' => 'Kecerdasan Buatan']);
        Kategori::firstOrCreate(['nama' => 'Multimedia']);
        Kategori::firstOrCreate(['nama' => 'Keamanan Siber']);
        Kategori::firstOrCreate(['nama' => 'Web Development']);
        Kategori::firstOrCreate(['nama' => 'Mobile Development']);
        Kategori::firstOrCreate(['nama' => 'Algoritma dan Struktur Data']);
    }   
}

