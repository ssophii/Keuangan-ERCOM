<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengeluarans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->enum('kategori', ['Inventaris', 'Sewa', 'Proker', 'Lainnya']);
            $table->enum('bidang', ['Inti', 'PSDM', 'Diklat', 'Ripi', 'Kominfo', 'Biro Kestari', 'Biro Keuangan']);
            $table->string('kegiatan');
            $table->integer('nominal');
            $table->string('keterangan')->nullable();
            $table->string('bukti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluarans');
    }
};
