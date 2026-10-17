<?php

namespace Database\Seeders;

use App\Models\Ide;
use App\Models\Komentar;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class KomentarSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $ideIds  = Ide::pluck('id')->toArray();
        $userIds = User::pluck('id')->toArray();

        $isi = [
            'Ide yang bagus, semoga bisa segera diterapkan.',
            'Setuju, warga sekitar saya sangat membutuhkannya.',
            'Perlu dikaji anggarannya dulu supaya realistis.',
            'Bisa dimulai dari satu kecamatan sebagai percontohan.',
            'Mohon pemerintah daerah menindaklanjuti usulan ini.',
            'Saya siap ikut membantu kalau ada kegiatannya.',
        ];

        for ($i = 0; $i < 25; $i++) {
            Komentar::create([
                'ide_id'  => $faker->randomElement($ideIds),
                'user_id' => $faker->randomElement($userIds),
                'isi'     => $faker->randomElement($isi),
            ]);
        }
    }
}