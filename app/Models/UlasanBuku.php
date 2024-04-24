<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlasanBuku extends Model
{
    use HasFactory;
    protected $table = "ulasan_buku";
    protected $fillable = [
        'userId',
        'bukuId',
        'ulasan',
        'rating',
    ];
}
