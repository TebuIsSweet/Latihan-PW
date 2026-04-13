<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create ([
            'judul' => 'Basis Data 11',
            'pengarang' => 'kemendikbud',
            'penerbit' => 'kemendikbud',
            'tahun_terbit' => 2024,
            'jumlah_halaman' => 246
        ]);
    }
}
