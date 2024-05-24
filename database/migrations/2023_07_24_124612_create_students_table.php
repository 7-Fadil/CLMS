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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100);
            $table->string('first_name', 50)->nullable();
            $table->string('other_name', 50)->nullable();
            $table->string('email_address', 100)->nullable();
            $table->string('matric_number', 100)->nullable();
            $table->string('password', 100)->nullable();
            $table->string('profile_pic', 100)->nullable();
            $table->boolean('status')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
