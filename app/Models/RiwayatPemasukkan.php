<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Pemasukkan;
use App\Models\User;

class RiwayatPemasukkan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pemasukkans'; // Pastikan ini sesuai dengan nama tabel

    protected $fillable = [
        'pemasukkan_id',
        'user_id',
        'old_data',
        'new_data',
    ];
    protected $casts = [
        'old_data' => 'array',
        'new_data' => 'array',
    ];

    /**
     * Relasi ke model Pemasukkan.
     */
    public function pemasukkan()
    {
        return $this->belongsTo(Pemasukkan::class);
    }

    /**
     * Relasi ke model User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

