<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->date('dob');
            $table->string('city');
            $table->string('state');
            $table->integer('zip')->unique();
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->string('course');
            $table->string('password');  // Fixed Password
            $table->string('profile')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
