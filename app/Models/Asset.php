<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = ['asset_name', 'jumlah'];

    public function allocations()
    {
        return $this->hasMany(Allocation::class);
    }
}
