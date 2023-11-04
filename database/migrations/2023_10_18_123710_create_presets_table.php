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
        Schema::create('presets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->string('file_name')->required();
            $table->string('thumbnail')->required();
            $table->enum('type', ['common', 'exclusive'])->default('common')->nullable();
            $table->string('color_pallete')->nullable();
            $table->json('default_data')->required();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presets');
    }
};
