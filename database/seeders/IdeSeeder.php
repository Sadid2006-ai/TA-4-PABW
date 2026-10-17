<?php

namespace Database\Seeders;

use App\Models\Ide;
use App\Models\Kategori;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class IdeSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $userIds     = User::pluck('id')->toArray();
        $kategoriIds = Kategori::pluck('id')->toArray();

        $judul = [
            'Bus listrik gratis untuk pelajar',
            'Bank sampah di setiap RW',
            'Taman baca di halte kota',
            'Posyandu keliling digital',
            'Pasar UMKM malam akhir pekan',
            'Jalur sepeda di pusat kota',
            'Sensor ketinggian air di sungai',
            'Wi-Fi gratis di ruang publik',
            'Pelatihan coding untuk remaja',
            'Lampu jalan tenaga surya',
            'Aplikasi jadwal angkot real-time',
            'Kebun kota di lahan kosong',
        ];

        $status = ['Diajukan', 'Sedang Progress', 'Selesai'];

        foreach ($judul as $j) {
            Ide::create([
                'user_id'           => $faker->randomElement($userIds),
                'kategori_id'       => $faker->randomElement($kategoriIds),
                'judul'             => $j,
                'deskripsi'         => $faker->paragraph(3),
                'status'            => $faker->randomElement($status),
                'tanggal_pengajuan' => $faker->dateTimeBetween('-3 months', 'now')->format('Y-m-d'),
                'jumlah_like'       => $faker->numberBetween(0, 200),
            ]);
        }
    }
}