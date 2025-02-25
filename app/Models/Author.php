<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
    ];
    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
