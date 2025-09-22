<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ✅ Panggil seeder lain di sini
        $this->call([
            AssetSeeder::class,
            LocationSeeder::class, // kalau sudah ada seeder lokasi
        ]);
    }
}
        