<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenulisSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'nama_depan' => 'Budi',
                'nama_belakang' => 'Santoso',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_depan' => 'Ani',
                'nama_belakang' => 'Wijaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_depan' => 'Dewi',
                'nama_belakang' => 'Sari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
