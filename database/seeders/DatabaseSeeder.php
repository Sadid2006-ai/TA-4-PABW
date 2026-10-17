<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            LaporanSeeder::class,   // data LaporBanjir
            KategoriSeeder::class,  // urutan penting: induk dulu,
            UserSeeder::class,      // baru tabel yang punya foreign key
            IdeSeeder::class,
            KomentarSeeder::class,
        ]);
    }
}