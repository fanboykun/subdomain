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
        Schema::create('covers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->required()->constrained()->cascadeOnDelete();
            $table->boolean('is_logo_enabled')->default(true);
            $table->string('cover_title')->required();
            $table->string('cover_upper_text')->required();
            $table->string('cover_lower_text')->nullable();
            $table->string('cover_desktop')->required();
            $table->string('cover_mobile')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covers');
    }
};
