<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id(); // id
            $table->string('name'); // name
            $table->string('email')->unique(); // email
            $table->timestamp('email_verified_at')->nullable(); // email_verified_at
            $table->string('password'); // password
            $table->rememberToken(); // remember_token
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
