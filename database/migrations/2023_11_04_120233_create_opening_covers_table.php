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
        Schema::create('opening_covers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->required()->constrained()->cascadeOnDelete();
            $table->string('opening_cover_title')->required();
            $table->string('opening_cover_body')->required();
            $table->string('opening_cover_button_text')->required();
            $table->string('opening_cover_desktop')->required();
            $table->string('opening_cover_mobile')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opening_covers');
    }
};
