<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'nama_buku', 
        'buku_aktif', 
        'buku_deskripsi', 
        'edisi', 
        'isbn', 
        'tahun',
        'author_id',
        'publisher_id'
    ];

    use HasFactory;
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }
}
