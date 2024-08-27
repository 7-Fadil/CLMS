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
        Schema::create('faculty_has_departments', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('faculty_uuid');
            $table->string('department_uuid');
            $table->enum('status', [1,0])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty_has_departments');
    }
};
