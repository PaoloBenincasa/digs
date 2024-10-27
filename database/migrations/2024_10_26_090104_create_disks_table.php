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
        Schema::create('disks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('artist');
            $table->year('year');
            $table->decimal('price', 8, 2);
            $table->text('description');
            // $table->unsignedBigInteger('format_id')->nullable();
            $table->foreignId('format_id')->references('id')->on('formats');
            // $table->unsignedBigInteger('genre_id')->nullable();
            $table->foreignId('genre_id')->references('id')->on('genres');
            // $table->unsignedBigInteger('user_id')->nullable();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disks');
    }
};
