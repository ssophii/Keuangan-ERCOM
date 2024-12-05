<?php

namespace Database\Seeders;

use App\Models\Pengeluaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengeluarans = [

            [
                'tanggal' => '2024-02-02',
                'kategori' => 'Sewa',
                'bidang' => 'Inti',
                'kegiatan' => 'Rapat Kerja',
                'nominal' => 75000,
                'keterangan' => 'Sewa Gedung'
            ],

            [
                'tanggal' => '2024-02-19',
                'kategori' => 'Inventaris',
                'bidang' => 'Biro Kestari',
                'kegiatan' => 'Kebersihan Sekre',
                'nominal' => 445000,
                'keterangan' => 'Alat kebersihan sekre'
            ],

            [
                'tanggal' => '2024-02-24',
                'kategori' => 'Sewa',
                'bidang' => 'Inti',
                'kegiatan' => 'Rapat Kerja',
                'nominal' => 75000,
                'keterangan' => 'Sewa Sound System'
            ],

            [
                'tanggal' => '2024-02-24',
                'kategori' => 'Sewa',
                'bidang' => 'Kominfo',
                'kegiatan' => 'Rapat Kerja',
                'nominal' => 150000,
                'keterangan' => 'Sewa Kamera'
            ],

            [
                'tanggal' => '2024-03-24',
                'kategori' => 'Proker',
                'bidang' => 'PSDM',
                'kegiatan' => 'Togetherness',
                'nominal' => 204000,
                'keterangan' => 'Penyewaan Lokasi dan Kamera'
            ],

            [
                'tanggal' => '2024-03-30',
                'kategori' => 'Proker',
                'bidang' => 'Diklat',
                'kegiatan' => 'Ercom Goes To School',
                'nominal' => 112000,
                'keterangan' => 'Oprasional kegiatan'
            ],

            [
                'tanggal' => '2024-04-07',
                'kategori' => 'Sewa',
                'bidang' => 'Kominfo',
                'kegiatan' => 'Menyusun Feed IG',
                'nominal' => 25000,
                'keterangan' => 'Canva Premium 1 Tahun'
            ],

            [
                'tanggal' => '2024-04-27',
                'kategori' => 'Lainnya',
                'bidang' => 'Inti',
                'kegiatan' => 'Pendaftaran Lomba',
                'nominal' => 25000,
                'keterangan' => 'Lomba Business Plan'
            ],

            [
                'tanggal' => '2024-05-18',
                'kategori' => 'Lainnya',
                'bidang' => 'Inti',
                'kegiatan' => 'Pembentukan Panitia',
                'nominal' => 102000,
                'keterangan' => 'Konsumsi'
            ],

            [
                'tanggal' => '2024-05-30',
                'kategori' => 'Proker',
                'bidang' => 'Diklat',
                'kegiatan' => 'Pelatihan Event Organizer',
                'nominal' => 112000,
                'keterangan' => 'Oprasional kegiatan'
            ],

            [
                'tanggal' => '2024-06-08',
                'kategori' => 'Proker',
                'bidang' => 'Diklat',
                'kegiatan' => 'Pelatihan LinkedIn',
                'nominal' => 112000,
                'keterangan' => 'Oprasional kegiatan'
            ],

            [
                'tanggal' => '2024-08-09',
                'kategori' => 'Proker',
                'bidang' => 'PSDM',
                'kegiatan' => 'PLB',
                'nominal' => 159000,
                'keterangan' => 'Oprasional kegiatan'
            ],

            [
                'tanggal' => '2024-08-24',
                'kategori' => 'Proker',
                'bidang' => 'PSDM',
                'kegiatan' => 'Upgrading',
                'nominal' => 344000,
                'keterangan' => 'Oprasional kegiatan'
            ],

            [
                'tanggal' => '2024-09-09',
                'kategori' => 'Proker',
                'bidang' => 'PSDM',
                'kegiatan' => 'PENA',
                'nominal' => 765000,
                'keterangan' => 'Oprasional kegiatan'
            ],

            [
                'tanggal' => '2024-09-30',
                'kategori' => 'Sewa',
                'bidang' => 'Ripi',
                'kegiatan' => 'NEON 2024',
                'nominal' => 50000,
                'keterangan' => 'Partnertship'
            ],

            [
                'tanggal' => '2024-10-18',
                'kategori' => 'Sewa',
                'bidang' => 'Ripi',
                'kegiatan' => 'NEON 2024',
                'nominal' => 15000,
                'keterangan' => 'Partnertship'
            ],

            [
                'tanggal' => '2024-11-04',
                'kategori' => 'Proker',
                'bidang' => 'Ripi',
                'kegiatan' => 'NEON 2024',
                'nominal' => 3400000,
                'keterangan' => 'Operasional kegiatan'
            ],
        ];

        foreach ($pengeluarans as $pengeluaran) {
            Pengeluaran::create($pengeluaran);
        }
    }
}
