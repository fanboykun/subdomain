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
        Schema::create('additional_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wedding_id')->constrained()->cascadeOnDelete();
            $table->enum('language', ['id', 'en'])->default('id')->nullable();
            $table->foreignId('song_id')->nullable();
            $table->boolean('is_streaming_enabled')->default(false)->nullable();
            $table->enum('streaming_platform', ['youtube', 'zoom', 'google_meet', 'other'])->default('youtube')->nullable();
            $table->boolean('is_has_instagram_filter')->default(false)->nullable();
            $table->string('instagram_filter_link')->nullable();
            $table->string('streaming_link')->nullable();
            $table->foreignId('protocol_id')->nullable();
            $table->boolean('is_countdown_enabled')->default(true)->nullable();
            $table->longText('quote')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_information');
    }
};
