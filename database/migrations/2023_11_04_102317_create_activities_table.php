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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->cascadeOnDelete();
            $table->date('date')->required();
            $table->string('activity_title')->required();
            $table->longText('activity_description')->nullable();
            $table->time('start_time')->required();
            $table->time('finish_time')->nullable();
            $table->boolean('is_main_event')->default(false);
            $table->boolean('is_publicly_visible')->default(true);
            $table->boolean('is_map_visible')->default(true);
            $table->longText('google_map_pin')->required();
            $table->string('address_location')->required();
            $table->string('place_location')->required();
            $table->string('city_location')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
