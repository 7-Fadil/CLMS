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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('title')->unique();
            $table->string('author');
            $table->string('publisher');
            $table->string('year');
            $table->string('issn')->unique();
            $table->string('book_file', 250);
            $table->string('volume');
            $table->enum('status', [1,0])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};
