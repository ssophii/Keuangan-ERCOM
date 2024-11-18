<?php

namespace App\Models;

use App\Models\Saldo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemasukkan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'kategori',
        'nominal',
        'keterangan',
    ];

    public function saldo(): BelongsTo
    {
        return $this->belongsTo(Saldo::class);
    }
}
