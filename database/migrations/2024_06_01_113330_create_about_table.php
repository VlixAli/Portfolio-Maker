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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->text('summary')->nullable();
            $table->string('title')->nullable();
            $table->date('birthday')->nullable();
            $table->unsignedInteger('age')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('degree')->nullable();
            $table->string('email')->nullable();
            $table->enum('freelance', ['Available', 'Unavailable'])->nullable();
            $table->text('short_summary')->nullable();
            $table->longText('ending')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
