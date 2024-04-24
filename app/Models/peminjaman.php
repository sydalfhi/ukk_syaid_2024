<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjaman";
    public $timestamps = false;
    protected $fillable = [
        'userId',
        'bukuId',
        'TanggalPeminjaman',
        'TanggalPengembalian',
        'StatusPeminjaman',
    ];
}
