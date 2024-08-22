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
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table -> string('uuid', 100)->unique();
            $table -> string('student_login_uuid', 100)->unique()->nullable();
            $table -> string('firstname', 50);
            $table -> string('surname', 50);
            $table -> string('othername', 50)->nullable();
            $table -> string('matric_number')->unique();
            $table -> enum('gender', ['M', 'F']);
            $table -> string('birth_date');
            $table -> string('phone_number', 50)->unique();
            $table -> string('email_address', 100)->unique();
            $table -> text('residencial_address')->nullable();
            $table -> string('nok_name', 50)->nullable();
            $table -> string('nok_address', 60)->nullable();
            $table -> string('nok_phone_number', 50)->nullable()->unique();
            $table -> string('state_id')->nullable();
            $table -> string('lga_id')->nullable();
            $table -> string('faculty_uuid', 100)->unique()->nullable();
            $table -> string('department_uuid', 100)->unique()->nullable();
            $table -> string('photo_path', 2043)->nullable();
            $table -> enum('is_active', [1, 0])->default(1);
            $table->timestamps();
            $table -> softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};
