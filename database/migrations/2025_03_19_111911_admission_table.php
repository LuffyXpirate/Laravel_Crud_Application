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
        // Create the table
        Schema::create('admission', function (Blueprint $table) {
            $table->id(); // auto-increment primary key
            $table->string('name'); // student name
            $table->string('email')->unique(); // student email
            $table->string('phone'); // student phone
            $table->foreignId('course_id')->constrained()->onDelete('cascade'); // foreign key for course

            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the students table
        Schema::dropIfExists('admission');
    }
};