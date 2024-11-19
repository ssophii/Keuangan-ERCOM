<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            
            //1
            [
                'name' => 'Yulia Pratiwi',
                'npm' => 'G1A021029',
                'role' => 'bendahara',
            ],

            //inti
            //2
            [
                'name' => 'Fanissa Azzahra',
                'npm' => 'G1A021091',
            ],

            //3
            [
                'name' => 'Salla Fikriyatul Arifah',
                'npm' => 'G1A022003',
            ],

            //PSDM
            //4
            [
                'name' => 'Ikhsanudin Pratama',
                'npm' => 'G1F022054',
            ],

            //5
            [
                'name' => 'Abram Dimas Hoswandi',
                'npm' => 'G1A021043',
            ],

            //6
            [
                'name' => 'Sophina Shafa Salsabila',
                'npm' => 'G1A022021',
            ],

            //7
            [
                'name' => 'Lio Kusanta',
                'npm' => 'G1A023013',
            ],

            //8
            [
                'name' => 'Hana Syarifah',
                'npm' => 'G1A023017',
            ],

            //9
            [
                'name' => 'Fidia Dewi Wulandari',
                'npm' => 'G1A023040',
            ],

            //10
            [
                'name' => 'Khalisa Rizgita Amanda',
                'npm' => 'G1A023080',
            ],

            //11
            [
                'name' => 'Deka Aria Bhakti',
                'npm' => 'G1B023017',
            ],

            //12
            [
                'name' => 'Rafi Nurhakim',
                'npm' => 'G1D023002',
            ],

            //13
            [
                'name' => 'Ridha Rahma',
                'npm' => 'G1D023010',
            ],

            //14
            [
                'name' => 'Jeki Sanjaka',
                'npm' => 'G1D023022',
            ],

            //15
            [
                'name' => 'Hafizh Zikri Hamidi',
                'npm' => 'G1D023063',
            ],

            //16
            [
                'name' => 'Shinta Widiawati',
                'npm' => 'G1F023008',
            ],

            //17
            [
                'name' => 'Ferdi Jangjaya',
                'npm' => 'G1B022004',
            ],

            //KESTARI
            //18
            [
                'name' => 'Ayu Vinariani',
                'npm' => 'G1B022079',
            ],

            //19
            [
                'name' => 'Merly Yuni Purnama',
                'npm' => 'G1A022006',
            ],

            //20
            [
                'name' => 'Reksi Hendra Pratama',
                'npm' => 'G1A022032',
            ],

            //21
            [
                'name' => 'Ammar Siraj Ananda',
                'npm' => 'G1A023021',
            ],

            //22
            [
                'name' => 'Nurul Dwi Endarina',
                'npm' => 'G1B022007',
            ],

            //23
            [
                'name' => 'Lailatul Badriah',
                'npm' => 'G1F023002',
            ],

            //24
            [
                'name' => 'Jefri Hamid',
                'npm' => 'G1F023003',
            ],

            //25
            [
                'name' => 'Keisha Azzahra Anindya',
                'npm' => 'G1F023040',
            ],

            //26
            [
                'name' => 'Zahra Aulia Fidelita',
                'npm' => 'G1F023044',
            ],

            //KEUANGAN
            //27
            [
                'name' => 'Setiawan Medi',
                'npm' => 'G1',
            ],

            //28
            [
                'name' => 'Linia Nur Aini',
                'npm' => 'G1A023007',
            ],

            //29
            [
                'name' => 'Rahma Hidayati',
                'npm' => 'G1A023074',
            ],

            //30
            [
                'name' => 'Qonita Adzkiatul',
                'npm' => 'G1A023086',
            ],

            //31
            [
                'name' => 'Paksi Dwi Jayanto',
                'npm' => 'G1A021011',
            ],

            //32
            [
                'name' => 'Anisa Nichen',
                'npm' => 'G1B022017',
            ],

            //33
            [
                'name' => 'Bela Rizki Agustin',
                'npm' => 'G1F023054',
            ],

            //34
            [
                'name' => 'Reva Agustina',
                'npm' => 'G1F023038',
            ],

            //35
            [
                'name' => 'Keysa Magfira',
                'npm' => 'G1A022012',
            ],

            //Diklat
            //36
            [
                'name' => 'Muhammad Salman Alfarizi',
                'npm' => 'G1F022047',
            ],

            //37
            [
                'name' => 'Dinda Krisnauli Pakpahan',
                'npm' => 'G1A023076',
            ],

            //38
            [
                'name' => 'Rhebi Ersa Monica',
                'npm' => 'G1A023016',
            ],

            //39
            [
                'name' => 'Azzahra Faranisa',
                'npm' => 'G1A023010',
            ],

            //40
            [
                'name' => 'Fazri Zulkarnain',
                'npm' => 'G1D023057',
            ],

            //41
            [
                'name' => 'Salma Alfatahani',
                'npm' => 'G1B023001',
            ],

            //42
            [
                'name' => 'Meisy Dianita',
                'npm' => 'G1F022008',
            ],

            //43
            [
                'name' => 'Thesa Febriani',
                'npm' => 'G1F022033',
            ],

            //RIPI
            //44
            [
                'name' => 'Aditya Saputra',
                'npm' => 'G1A023024',
            ],

            //45
            [
                'name' => 'Robi Septian Subhan',
                'npm' => 'G1A023060',
            ],

            //46
            [
                'name' => 'Filda Alvian Adhitia',
                'npm' => 'G1D023014',
            ],

            //47
            [
                'name' => 'Rahmat Faiz Tri Gunawan',
                'npm' => 'G1D023063',
            ],

            //48
            [
                'name' => 'Wahyu Ozorah Manurung',
                'npm' => 'G1A022060',
            ],

            //49
            [
                'name' => 'Dafitra Putra Pratama',
                'npm' => 'G1D023067',
            ],

            //50
            [
                'name' => 'Destian Dwi Cahyo',
                'npm' => 'G1D023021',
            ],

            //51
            [
                'name' => 'Ade Yudistira',
                'npm' => 'G1D023065',
            ],

            //52
            [
                'name' => 'Rimaya Dwi Atika',
                'npm' => 'G1A021021',
            ],

            //53
            [
                'name' => 'Anisa Julianti',
                'npm' => 'G1A023052',
            ],

            //KOMINFO
            //54
            [
                'name' => 'Refi Oryza',
                'npm' => 'G1F022068',
            ],

            //55
            [
                'name' => 'Aurel Moura',
                'npm' => 'G1A023001',
            ],

            //56
            [
                'name' => 'Elena Rosita Nasution',
                'npm' => 'G1B023014',
            ],

            //57
            [
                'name' => 'Rayhan Muhammad Adha',
                'npm' => 'G1A023051',
            ],

            //58
            [
                'name' => 'Koreza Almukadima',
                'npm' => 'G1A023011',
            ],

            //59
            [
                'name' => 'Kenia Nurma Feblia',
                'npm' => 'G1A023004',
            ],

            //60
            [
                'name' => 'Davi Sulaiman',
                'npm' => 'G1A022001',
            ],

            //61
            [
                'name' => 'Hidayat Palevi',
                'npm' => 'G1F023031',
            ],

        ]);
    }
}
