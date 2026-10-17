<?php

namespace Database\Seeders;

use App\Models\Laporan;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('ru_RU');

        $kecamatan = [
            'Leningrad','sneznograd','vladivostok', 'moskow',
            'Kazan','Saint Petersburg','Sochi',
        ];

        for ($i = 0; $i < 20; $i++) {
            Laporan::create([
                'nama_pelapor' => $faker->name(),
                'lokasi' => $faker->randomElement($kecamatan),
                'tinggi_genangan' => $faker->numberBetween(10, 150),
                'tanggal_kejadian'=> $faker->dateTimeBetween('-1 month','now')->format('Y-m-d'),
            ]);
        }
    }
}
