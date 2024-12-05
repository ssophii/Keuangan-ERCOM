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
        Schema::create('pemasukkans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->enum('kategori', ['Kas', 'Dana Dekanat', 'Lainnya']);
            $table->enum('bidang', ['Inti', 'PSDM', 'Diklat', 'Ripi', 'Kominfo', 'Biro Kestari', 'Biro Keuangan']);
            $table->integer('nominal');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukkans');
    }
};
