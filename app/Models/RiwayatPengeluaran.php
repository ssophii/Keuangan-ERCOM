<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Pengeluaran;
use App\Models\User;

class RiwayatPengeluaran extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pengeluarans'; // Pastikan ini sesuai dengan nama tabel

    protected $fillable = [
        'pengeluaran_id',
        'user_id',
        'old_data',
        'new_data',
    ];
    protected $casts = [
        'old_data' => 'array',
        'new_data' => 'array',
    ];

    /**
     * Relasi ke model pengeluaran.
     */
    public function pengeluaran()
    {
        return $this->belongsTo(Pengeluaran::class);
    }

    /**
     * Relasi ke model User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

