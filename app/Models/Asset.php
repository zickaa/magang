<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'asset_name',
        'kode_asset',
        'jumlah',
    ];

    // Relasi ke Allocation
    public function allocations()
    {
        return $this->hasMany(Allocation::class, 'asset_id');
    }
}
