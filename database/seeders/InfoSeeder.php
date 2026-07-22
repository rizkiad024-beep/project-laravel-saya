<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    public function run(): void
    {
        Info::create([
            'title' => 'Selamat Datang di Diskominfo Provinsi',
            'content' => 'Ini adalah informasi awal. Silakan perbarui melalui halaman Tentang Kami.',
            'alamat' => 'Jalan Contoh No. 123, Kota Contoh',
            'ig_link' => 'https://instagram.com/example',
            'whatsapp' => '6281234567890',
            'image_path' => null,
        ]);
    }
}
