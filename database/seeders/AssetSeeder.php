<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    public function run(): void
    {
        $assets = [
            ['asset_name' => 'Laptop'],
            ['asset_name' => 'Printer'],
            ['asset_name' => 'Meja'],
            ['asset_name' => 'Kursi'],
            ['asset_name' => 'Handphone'],
            ['asset_name' => 'Server'],
            ['asset_name' => 'Router'],
            ['asset_name' => 'Proyektor'],
            ['asset_name' => 'AC'],
            ['asset_name' => 'Motor Operasional'],
        ];

        foreach ($assets as $asset) {
            Asset::create($asset);
        }
    }
}
