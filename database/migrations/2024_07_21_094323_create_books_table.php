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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('books_category_uuid');
            $table->string('books_name', 100)->unique();
            $table->string('isbn_number', 100)->unique();
            $table->string('author');
            $table->string('book_pdf');
            $table->string('book_img', 250)->nullable();
            $table->boolean('is_active')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
