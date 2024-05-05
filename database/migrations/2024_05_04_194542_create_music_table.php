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
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('artist');
            $table->integer('release_year');
            $table->decimal('duration', 5, 2);
            $table->text('lyrics');
            $table->enum('genre', ['pop', 'rock', 'jazz', 'classical']);
            $table->boolean('is_explicit');
            $table->date('release_date');
            $table->float('popularity');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music');
    }
};
