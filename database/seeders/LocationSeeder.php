<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            ['nama_lokasi' => 'Gudang A', 'tipe' => 'Gudang'],
            ['nama_lokasi' => 'Gudang B', 'tipe' => 'Gudang'],
            ['nama_lokasi' => 'Kantor BSD', 'tipe' => 'Kantor'],
            ['nama_lokasi' => 'Kantor Pusat', 'tipe' => 'Kantor'],
            ['nama_lokasi' => 'Cabang Jakarta', 'tipe' => 'Cabang'],
            ['nama_lokasi' => 'Cabang Surabaya', 'tipe' => 'Cabang'],
            ['nama_lokasi' => 'Cabang Medan', 'tipe' => 'Cabang'],
        ];

        foreach ($locations as $loc) {
            Location::create($loc);
        }
    }
}
