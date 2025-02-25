<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil ID penulis dan penerbit sebagai referensi foreign key
        $penulis = DB::table('authors')->pluck('id')->toArray();
        $penerbit = DB::table('publishers')->pluck('id')->toArray();

        if (empty($penulis) || empty($penerbit)) {
            $this->command->warn("Seeder Buku membutuhkan data di tabel 'penulis' dan 'penerbit'. Pastikan kedua tabel sudah terisi sebelum menjalankan seeder ini.");
            return;
        }

        DB::table('books')->insert([
            [
                'nama_buku' => 'Pemrograman Laravel',
                'buku_aktif' => 'Ya',
                'buku_deskripsi' => 'Panduan lengkap belajar Laravel dari dasar hingga mahir.',
                'edisi' => '1',
                'isbn' => '978-602-1234-567-8',
                'tahun' => '2023',
                'author_id' => $penulis[array_rand($penulis)],
                'publisher_id' => $penerbit[array_rand($penerbit)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_buku' => 'Belajar Database MySQL',
                'buku_aktif' => 'Ya',
                'buku_deskripsi' => 'Buku referensi untuk memahami dasar-dasar database MySQL.',
                'edisi' => '2',
                'isbn' => '978-602-9876-543-2',
                'tahun' => '2022',
                'author_id' => $penulis[array_rand($penulis)],
                'publisher_id' => $penerbit[array_rand($penerbit)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_buku' => 'Dasar-Dasar Pemrograman Python',
                'buku_aktif' => 'Ya',
                'buku_deskripsi' => 'Materi lengkap untuk pemula yang ingin belajar Python.',
                'edisi' => '3',
                'isbn' => '978-602-7654-321-0',
                'tahun' => '2021',
                'author_id' => $penulis[array_rand($penulis)],
                'publisher_id' => $penerbit[array_rand($penerbit)],
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
