<?php

namespace Database\Seeders;

use App\Models\Pemasukkan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemasukkanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pemasukkans = [
            [
                'tanggal' => '2024-01-01',
                'kategori' => 'Lainnya',
                'bidang' => 'Inti',
                'nominal' => 1777838,
                'keterangan' => 'Penyerahan Kas Tahun 2023'
            ],

            [
                'tanggal' => '2024-01-05',
                'kategori' => 'Dana Dekanat',
                'bidang' => 'Ripi',
                'nominal' => 2000000,
                'keterangan' => 'Sisa Pencairan LPJ RCA 2023'
            ],

            [
                'tanggal' => '2024-02-28',
                'kategori' => 'Kas',
                'bidang' => 'Inti',
                'nominal' => 60000,
                'keterangan' => 'Yulia, Fanissa, Salla'
            ],

            [
                'tanggal' => '2024-02-28',
                'kategori' => 'Kas',
                'bidang' => 'Biro Keuangan',
                'nominal' => 140000,
                'keterangan' => 'Medi, Linia, Rahma, Paksi, Bela, Reva, Keysa'
            ],

            [
                'tanggal' => '2024-03-30',
                'kategori' => 'Kas',
                'bidang' => 'PSDM',
                'nominal' => 260000,
                'keterangan' => 'Semua Anggota PSDM'
            ],

            [
                'tanggal' => '2024-03-30',
                'kategori' => 'Kas',
                'bidang' => 'Diklat',
                'nominal' => 240000,
                'keterangan' => 'Semua Anggota Diklat'
            ],

            [
                'tanggal' => '2024-03-30',
                'kategori' => 'Kas',
                'bidang' => 'Biro Keuangan',
                'nominal' => 40000,
                'keterangan' => 'Qonita, Anisa'
            ],

            [
                'tanggal' => '2024-04-30',
                'kategori' => 'Kas',
                'bidang' => 'Ripi',
                'nominal' => 120000,
                'keterangan' => 'Adit, Robi, Filda, Rahmat, Wahyu, Dafitra'
            ],

            [
                'tanggal' => '2024-04-30',
                'kategori' => 'Kas',
                'bidang' => 'Kominfo',
                'nominal' => 220000,
                'keterangan' => 'Semua Anggota Kominfo'
            ],

            [
                'tanggal' => '2024-04-30',
                'kategori' => 'Kas',
                'bidang' => 'Biro Kestari',
                'nominal' => 180000,
                'keterangan' => 'Semua Anggota Biro Kestari'
            ],

            [
                'tanggal' => '2024-05-03',
                'kategori' => 'Dana Dekanat',
                'bidang' => 'PSDM',
                'nominal' => 1500000,
                'keterangan' => 'Pencairan LPJ Togetherness'
            ],
            
            [
                'tanggal' => '2024-05-31',
                'kategori' => 'Lainnya',
                'bidang' => 'Biro Keuangan',
                'nominal' => 362000,
                'keterangan' => 'Keuntungan Merch'
            ],
            
            [
                'tanggal' => '2024-05-31',
                'kategori' => 'Kas',
                'bidang' => 'Ripi',
                'nominal' => 80000,
                'keterangan' => 'Destian, Ade, Maya, Anisa'
            ],
            
            [
                'tanggal' => '2024-05-31',
                'kategori' => 'Kas',
                'bidang' => 'PSDM',
                'nominal' => 20000,
                'keterangan' => 'Ferdi'
            ],
            
            [
                'tanggal' => '2024-06-30',
                'kategori' => 'Dana Dekanat',
                'bidang' => 'Ripi',
                'nominal' => 2500000,
                'keterangan' => 'Pencairan LPJ Ercom Goes To School'
            ],

            [
                'tanggal' => '2024-07-03',
                'kategori' => 'Dana Dekanat',
                'bidang' => 'PSDM',
                'nominal' => 2000000,
                'keterangan' => 'Pencairan LPJ Event Organizer'
            ],
            
            [
                'tanggal' => '2024-07-30',
                'kategori' => 'Dana Dekanat',
                'bidang' => 'Diklat',
                'nominal' => 2000000,
                'keterangan' => 'Pencairan LPJ Pelatihan LinkedIn'
            ],

            [
                'tanggal' => '2024-10-08',
                'kategori' => 'Dana Dekanat',
                'bidang' => 'PSDM',
                'nominal' => 1000000,
                'keterangan' => 'Pencairan LPJ Upgrading'
            ],

            [
                'tanggal' => '2024-10-11',
                'kategori' => 'Dana Dekanat',
                'bidang' => 'PSDM',
                'nominal' => 3350000,
                'keterangan' => 'Pencairan LPJ PENA'
            ],
        ];

        foreach ($pemasukkans as $pemasukkan) {
            Pemasukkan::create($pemasukkan);
        }
    }
}
