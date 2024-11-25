<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =[
            
            // 1
            [
                'name' => 'Yulia Pratiwi',
                'npm' => 'G1A021029',
                'role' => 'bendahara',
                'password' => Hash::make('12345678'),
            ],

            //inti
            //2
            [
                'name' => 'Fanissa Azzahra',
                'npm' => 'G1A021091',
                'password' => Hash::make('12345678'),
            ],

            //3
            [
                'name' => 'Salla Fikriyatul Arifah',
                'npm' => 'G1A022003',
                'password' => Hash::make('12345678'),
            ],

            //PSDM
            //4
            [
                'name' => 'Ikhsanudin Pratama',
                'npm' => 'G1F022054',
                'password' => Hash::make('12345678'),
            ],

            //5
            [
                'name' => 'Abram Dimas Hoswandi',
                'npm' => 'G1A021043',
                'password' => Hash::make('12345678'),
            ],

            //6
            [
                'name' => 'Sophina Shafa Salsabila',
                'npm' => 'G1A022021',
                'password' => Hash::make('12345678'),
            ],

            //7
            [
                'name' => 'Lio Kusanta',
                'npm' => 'G1A023013',
                'password' => Hash::make('12345678'),
            ],

            //8
            [
                'name' => 'Hana Syarifah',
                'npm' => 'G1A023017',
                'password' => Hash::make('12345678'),
            ],

            //9
            [
                'name' => 'Fidia Dewi Wulandari',
                'npm' => 'G1A023040',
                'password' => Hash::make('12345678'),
            ],

            //10
            [
                'name' => 'Khalisa Rizgita Amanda',
                'npm' => 'G1A023080',
                'password' => Hash::make('12345678'),
            ],

            //11
            [
                'name' => 'Deka Aria Bhakti',
                'npm' => 'G1B023017',
                'password' => Hash::make('12345678'),
            ],

            //12
            [
                'name' => 'Rafi Nurhakim',
                'npm' => 'G1D023002',
                'password' => Hash::make('12345678'),
            ],

            //13
            [
                'name' => 'Ridha Rahma',
                'npm' => 'G1D023010',
                'password' => Hash::make('12345678'),
            ],

            //14
            [
                'name' => 'Jeki Sanjaka',
                'npm' => 'G1D023022',
                'password' => Hash::make('12345678'),
            ],

            //15
            [
                'name' => 'Hafizh Zikri Hamidi',
                'npm' => 'G1D023063',
                'password' => Hash::make('12345678'),
            ],

            //16
            [
                'name' => 'Shinta Widiawati',
                'npm' => 'G1F023008',
                'password' => Hash::make('12345678'),
            ],

            //17
            [
                'name' => 'Ferdi Jangjaya',
                'npm' => 'G1B022004',
                'password' => Hash::make('12345678'),
            ],

            //KESTARI
            //18
            [
                'name' => 'Ayu Vinariani',
                'npm' => 'G1B022079',
                'password' => Hash::make('12345678'),
            ],

            //19
            [
                'name' => 'Merly Yuni Purnama',
                'npm' => 'G1A022006',
                'password' => Hash::make('12345678'),
            ],

            //20
            [
                'name' => 'Reksi Hendra Pratama',
                'npm' => 'G1A022032',
                'password' => Hash::make('12345678'),
            ],

            //21
            [
                'name' => 'Ammar Siraj Ananda',
                'npm' => 'G1A023021',
                'password' => Hash::make('12345678'),
            ],

            //22
            [
                'name' => 'Nurul Dwi Endarina',
                'npm' => 'G1B022007',
                'password' => Hash::make('12345678'),
            ],

            //23
            [
                'name' => 'Lailatul Badriah',
                'npm' => 'G1F023002',
                'password' => Hash::make('12345678'),
            ],

            //24
            [
                'name' => 'Jefri Hamid',
                'npm' => 'G1F023003',
                'password' => Hash::make('12345678'),
            ],

            //25
            [
                'name' => 'Keisha Azzahra Anindya',
                'npm' => 'G1F023040',
                'password' => Hash::make('12345678'),
            ],

            //26
            [
                'name' => 'Zahra Aulia Fidelita',
                'npm' => 'G1F023044',
                'password' => Hash::make('12345678'),
            ],

            //KEUANGAN
            //27
            [
                'name' => 'Setiawan Medi',
                'npm' => 'G1D022001',
                'password' => Hash::make('12345678'),
            ],

            //28
            [
                'name' => 'Linia Nur Aini',
                'npm' => 'G1A023007',
                'password' => Hash::make('12345678'),
            ],

            //29
            [
                'name' => 'Rahma Hidayati',
                'npm' => 'G1A023074',
                'password' => Hash::make('12345678'),
            ],

            //30
            [
                'name' => 'Qonita Adzkiatul',
                'npm' => 'G1A023086',
                'password' => Hash::make('12345678'),
            ],

            //31
            [
                'name' => 'Paksi Dwi Jayanto',
                'npm' => 'G1A021011',
                'password' => Hash::make('12345678'),
            ],

            //32
            [
                'name' => 'Anisa Nichen',
                'npm' => 'G1B022017',
                'password' => Hash::make('12345678'),
            ],

            //33
            [
                'name' => 'Bela Rizki Agustin',
                'npm' => 'G1F023054',
                'password' => Hash::make('12345678'),
            ],

            //34
            [
                'name' => 'Reva Agustina',
                'npm' => 'G1F023038',
                'password' => Hash::make('12345678'),
            ],

            //35
            [
                'name' => 'Keysa Magfira',
                'npm' => 'G1A022012',
                'password' => Hash::make('12345678'),
            ],

            //Diklat
            //36
            [
                'name' => 'Muhammad Salman Alfarizi',
                'npm' => 'G1F022047',
                'password' => Hash::make('12345678'),
            ],

            //37
            [
                'name' => 'Dinda Krisnauli Pakpahan',
                'npm' => 'G1A023076',
                'password' => Hash::make('12345678'),
            ],

            //38
            [
                'name' => 'Rhebi Ersa Monica',
                'npm' => 'G1A023016',
                'password' => Hash::make('12345678'),
            ],

            //39
            [
                'name' => 'Azzahra Faranisa',
                'npm' => 'G1A023010',
                'password' => Hash::make('12345678'),
            ],

            //40
            [
                'name' => 'Fazri Zulkarnain',
                'npm' => 'G1D023057',
                'password' => Hash::make('12345678'),
            ],

            //41
            [
                'name' => 'Salma Alfatahani',
                'npm' => 'G1B023001',
                'password' => Hash::make('12345678'),
            ],

            //42
            [
                'name' => 'Meisy Dianita',
                'npm' => 'G1F022008',
                'password' => Hash::make('12345678'),
            ],

            //43
            [
                'name' => 'Thesa Febriani',
                'npm' => 'G1F022033',
                'password' => Hash::make('12345678'),
            ],

            //RIPI
            //44
            [
                'name' => 'Aditya Saputra',
                'npm' => 'G1A023024',
                'password' => Hash::make('12345678'),
            ],

            //45
            [
                'name' => 'Robi Septian Subhan',
                'npm' => 'G1A023060',
                'password' => Hash::make('12345678'),
            ],

            //46
            [
                'name' => 'Filda Alvian Adhitia',
                'npm' => 'G1D023014',
                'password' => Hash::make('12345678'),
            ],

            //47
            [
                'name' => 'Rahmat Faiz Tri Gunawan',
                'npm' => 'G1D023100',
                'password' => Hash::make('12345678'),
            ],

            //48
            [
                'name' => 'Wahyu Ozorah Manurung',
                'npm' => 'G1A022060',
                'password' => Hash::make('12345678'),
            ],

            //49
            [
                'name' => 'Dafitra Putra Pratama',
                'npm' => 'G1D023067',
                'password' => Hash::make('12345678'),
            ],

            //50
            [
                'name' => 'Destian Dwi Cahyo',
                'npm' => 'G1D023021',
                'password' => Hash::make('12345678'),
            ],

            //51
            [
                'name' => 'Ade Yudistira',
                'npm' => 'G1D023065',
                'password' => Hash::make('12345678'),
            ],

            //52
            [
                'name' => 'Rimaya Dwi Atika',
                'npm' => 'G1A021021',
                'password' => Hash::make('12345678'),
            ],

            //53
            [
                'name' => 'Anisa Julianti',
                'npm' => 'G1A023052',
                'password' => Hash::make('12345678'),
            ],

            //KOMINFO
            //54
            [
                'name' => 'Refi Oryza',
                'npm' => 'G1F022068',
                'password' => Hash::make('12345678'),
            ],

            //55
            [
                'name' => 'Aurel Moura',
                'npm' => 'G1A023001',
                'password' => Hash::make('12345678'),
            ],

            //56
            [
                'name' => 'Elena Rosita Nasution',
                'npm' => 'G1B023014',
                'password' => Hash::make('12345678'),
            ],

            //57
            [
                'name' => 'Rayhan Muhammad Adha',
                'npm' => 'G1A023051',
                'password' => Hash::make('12345678'),
            ],

            //58
            [
                'name' => 'Koreza Almukadima',
                'npm' => 'G1A023011',
                'password' => Hash::make('12345678'),
            ],

            //59
            [
                'name' => 'Kenia Nurma Feblia',
                'npm' => 'G1A023004',
                'password' => Hash::make('12345678'),
            ],

            //60
            [
                'name' => 'Davi Sulaiman',
                'npm' => 'G1A022001',
                'password' => Hash::make('12345678'),
            ],

            //61
            [
                'name' => 'Hidayat Palevi',
                'npm' => 'G1F023031',
                'password' => Hash::make('12345678'),
            ],

        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }
    }
}
