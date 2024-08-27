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
        Schema::create('books_reservations', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 100)->unique();
            $table->string('book_title');
            $table->string('author');
            $table->date('reservation_date');
            $table->integer('numbers_of_copies');
            $table->integer('reservation_duration');
            $table->string('student_id')->constrained()->onDelete('cascade');
            $table->text('notes');
            $table->string('book_format');
            $table->enum('status', [1,0])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_reservations');
    }
};
