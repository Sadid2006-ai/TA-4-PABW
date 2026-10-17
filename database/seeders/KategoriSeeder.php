<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $daftar = [
            'Transportasi'     => 'Ide seputar angkutan umum dan lalu lintas kota.',
            'Lingkungan'       => 'Ide seputar sampah, air, dan ruang hijau.',
            'Pendidikan'       => 'Ide seputar sekolah dan pelatihan warga.',
            'Kesehatan'        => 'Ide seputar layanan kesehatan masyarakat.',
            'Ekonomi Kreatif'  => 'Ide seputar UMKM dan usaha warga.',
            'Tata Kota'        => 'Ide seputar fasilitas dan penataan ruang kota.',
        ];

        foreach ($daftar as $nama => $deskripsi) {
            Kategori::create(['nama' => $nama, 'deskripsi' => $deskripsi]);
        }
    }
}