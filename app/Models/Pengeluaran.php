<?php

namespace App\Models;

use App\Models\Saldo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;


class Pengeluaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'kategori',
        'bidang',
        'kegiatan',
        'nominal',
        'keterangan',
        'bukti',
    ];
    
    public function saldo(): BelongsTo
    {
        return $this->belongsTo(Saldo::class);
    }
}
