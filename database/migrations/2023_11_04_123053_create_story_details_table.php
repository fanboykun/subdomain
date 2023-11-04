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
        Schema::create('story_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wedding_id')->required()->constrained()->cascadeOnDelete();
            $table->foreignId('story_id')->required()->constrained()->cascadeOnDelete();
            $table->string('story_subtitle')->required();
            $table->longText('story_description')->required();
            $table->string('story_picture')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('story_details');
    }
};
