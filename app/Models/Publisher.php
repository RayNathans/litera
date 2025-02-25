<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Publisher extends Model
{
    protected $table = 'publishers';
    protected $fillable = [
        'nama_penerbit', 
        'alamat_penerbit', 
        'no_telp', 
        'email_penerbit', 
        'penanggung_jawab', 
        'kota'
    ];


    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
