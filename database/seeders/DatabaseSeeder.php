<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Car;
use App\Models\Article;
use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat User Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@elegance.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'is_admin' => true, // Tambahkan ini
        ]);

        // 2. Buat User Biasa (opsional, untuk testing)
        User::create([
            'name' => 'Paijo',
            'email' => 'paijo@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('paijo123'),
            'is_admin' => false,
        ]);

        // 3. Buat Brand Mobil
        $brands = [];
        foreach (['Toyota', 'Honda', 'BMW', 'Mercedes-Benz', 'Mitsubishi'] as $name) {
            $brands[] = Brand::create(['name' => $name, 'logo' => null]);
        }

        // 4. Buat Kategori Artikel
        $categories = [];
        foreach (['Automotive News', 'Reviews', 'Maintenance Tips', 'Lifestyle'] as $name) {
            $categories[] = Category::create(['name' => $name, 'slug' => \Illuminate\Support\Str::slug($name)]);
        }

        // 5. Buat Halaman Statis
        Page::create([
            'title' => 'About Us',
            'slug' => 'about-us',
            'content' => 'Elegance Motors adalah showroom mobil premium terpercaya di Indonesia. Kami menyediakan koleksi kendaraan terpilih untuk pengguna dan penggemar otomotif.',
            'image' => null
        ]);
        Page::create([
            'title' => 'Privacy Policy',
            'slug' => 'privacy-policy',
            'content' => 'Kebijakan privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi data pribadi Anda saat menggunakan layanan Aurum Motors.',
            'image' => null
        ]);

        // 6. Buat Data Mobil Dummy
        $carsData = [
            ['brand' => 0, 'name' => 'Alphard HEV', 'price' => 2500000000, 'year' => 2024, 'desc' => 'MPV premium dengan teknologi hybrid dan kenyamanan kelas pertama.', 'status' => 'available', 'trans' => 'Matic', 'mileage' => 0],
            ['brand' => 1, 'name' => 'Civic Type R', 'price' => 1500000000, 'year' => 2023, 'desc' => 'Hatchback performance tertinggi dari Honda dengan mesin VTEC Turbo.', 'status' => 'available', 'trans' => 'Manual', 'mileage' => 1500],
            ['brand' => 2, 'name' => 'M4 Competition', 'price' => 3200000000, 'year' => 2023, 'desc' => 'Coupe performance dengan mesin biturbo inline-6 yang bertenaga.', 'status' => 'sold', 'trans' => 'Matic', 'mileage' => 5000],
            ['brand' => 3, 'name' => 'S-Class 580', 'price' => 4500000000, 'year' => 2024, 'desc' => 'Sedan mewah flagship dengan teknologi otonom dan interior terbaik.', 'status' => 'available', 'trans' => 'Matic', 'mileage' => 0],
        ];

        foreach ($carsData as $data) {
            Car::create([
                'brand_id' => $brands[$data['brand']]->id,
                'name' => $data['name'],
                'slug' => \Illuminate\Support\Str::slug($data['name'] . '-' . $data['year']),
                'price' => $data['price'],
                'year' => $data['year'],
                'image' => null, // Nanti bisa diupload via admin
                'description' => $data['desc'],
                'status' => $data['status'],
                'transmission' => $data['trans'],
                'mileage' => $data['mileage']
            ]);
        }

        // 7. Buat Artikel Dummy
        $articlesData = [
            ['cat' => 0, 'title' => 'Jakarta Motor Show 2026', 'content' => 'Pameran otomotif terbesar tahun ini kembali hadir dengan berbagai mobil konsep masa depan...'],
            ['cat' => 1, 'title' => 'Review BMW M4 Competition', 'content' => 'Bagaimana rasanya mengendarai M4 di jalanan Indonesia? Simak ulasan lengkap kami...'],
            ['cat' => 2, 'title' => 'Tips Merawat Mobil Matic', 'content' => 'Transmisi matic memerlukan perawatan khusus agar tetap awet dan performanya terjaga...'],
        ];

        foreach ($articlesData as $data) {
            Article::create([
                'category_id' => $categories[$data['cat']]->id,
                'title' => $data['title'],
                'slug' => \Illuminate\Support\Str::slug($data['title']),
                'image' => null,
                'content' => $data['content']
            ]);
        }
    }
}
