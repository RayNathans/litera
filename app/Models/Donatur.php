<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;
    protected $table = 'donaturs';
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'alamat_donatur',
        'phone_donatur',
        'email_donatur',
    ];
}
