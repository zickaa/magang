<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    public function run(): void
    {
        $assets = [
            ['asset_name' => 'Laptop', 'jumlah' => 10],
            ['asset_name' => 'Printer', 'jumlah' => 5],
            ['asset_name' => 'Meja', 'jumlah' => 15],
            ['asset_name' => 'Kursi', 'jumlah' => 20],
            ['asset_name' => 'Handphone', 'jumlah' => 8],
            ['asset_name' => 'Server', 'jumlah' => 2],
            ['asset_name' => 'Router', 'jumlah' => 3],
            ['asset_name' => 'Proyektor', 'jumlah' => 4],
            ['asset_name' => 'AC', 'jumlah' => 6],
            ['asset_name' => 'Motor Operasional', 'jumlah' => 5],
        ];

        foreach ($assets as $asset) {
            Asset::create($asset);
        }
    }
}
