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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->nullable();
            $table->string('student_uuid', 100)->nullable();
            $table->string('fisrt_name', 50)->nullable();
            $table->string('surname', 50)->nullable();
            $table->string('email_address', 100)->nullable();
            $table->string('parent_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
