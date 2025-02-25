<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerbitSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('publishers')->insert([
            [
                'nama_penerbit' => 'Gramedia',
                'alamat_penerbit' => 'Jl. Palmerah Barat No. 29-37, Jakarta',
                'no_telp' => '02153650110',
                'email_penerbit' => 'contact@gramedia.com',
                'penanggung_jawab' => 'Budi Santoso',
                'kota' => 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_penerbit' => 'Erlangga',
                'alamat_penerbit' => 'Jl. Haji Ten No. 10, Jakarta',
                'no_telp' => '02112345678',
                'email_penerbit' => 'info@erlangga.com',
                'penanggung_jawab' => 'Dewi Kartika',
                'kota' => 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_penerbit' => 'Mizan Publishing',
                'alamat_penerbit' => 'Jl. Cinambo No. 135, Bandung',
                'no_telp' => '02275651234',
                'email_penerbit' => 'support@mizan.com',
                'penanggung_jawab' => 'Ahmad Fauzi',
                'kota' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
