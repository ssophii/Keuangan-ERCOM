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
            $table->enum('kategori', ['inventaris', 'sewa', 'proker', 'lainnya']);
            $table->enum('bidang', ['inti', 'psdm', 'diklat', 'ripi', 'kominfo', 'kestari', 'keuangan']);
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
