<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100);
            $table->string('full_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone_number')->unique()->nullabele();
            $table->string('password');
            $table->string('gender')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('marital_status');
            $table->string('date_of_birth');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
