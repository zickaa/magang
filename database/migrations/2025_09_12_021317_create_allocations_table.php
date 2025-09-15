<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('allocations', function (Blueprint $table) {
            // hapus kolom lama (optional, kalau sudah ada data hati-hati dulu)
            $table->dropColumn(['from_location', 'to_location']);

            // ganti jadi relasi
            $table->foreignId('from_location_id')->nullable()
                ->constrained('locations')
                ->nullOnDelete();

            $table->foreignId('to_location_id')->nullable()
                ->constrained('locations')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('allocations');
    }
};
