<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['nama_lokasi', 'tipe'];

    public function allocationsFrom()
    {
        return $this->hasMany(Allocation::class, 'from_location_id');
    }

    public function allocationsTo()
    {
        return $this->hasMany(Allocation::class, 'to_location_id');
    }
}
