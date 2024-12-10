<?php

namespace App\Models;

use App\Models\RiwayatPemasukkan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemasukkan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'kategori',
        'bidang',
        'nominal',
        'keterangan',
    ];

    public function riwayat()
    {
        return $this->hasMany(RiwayatPemasukkan::class);
    }
}
