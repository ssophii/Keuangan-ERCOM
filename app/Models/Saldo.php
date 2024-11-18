<?php

namespace App\Models;

use App\Models\Pemasukkan;
use App\Models\Pengeluaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Saldo extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'id_pemasukkan',
        'id_pengeluaran',
    ];

    public function pemasukkan(): HasMany
    {
        return $this->hasMany(Pemasukkan::class);
    }

    public function pengeluaran(): HasMany
    {
        return $this->hasMany(Pengeluaran::class);
    }
}
