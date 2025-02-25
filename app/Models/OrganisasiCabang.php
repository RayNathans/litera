<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisasiCabang extends Model
{
    use HasFactory;
    protected $table = 'organisasi_cabangs';
    protected $fillable = [
        'nama_cabang',
        'alamat_cabang',
        'no_telp_cabang',
        'email_cabang',
    ];

    // public function book(): HasMany
    // {
    //     return $this->hasMany(Book::class);
    // }
}
