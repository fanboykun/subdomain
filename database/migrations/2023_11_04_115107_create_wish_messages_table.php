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
        Schema::create('wish_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wish_id')->constrained()->cascadeOnDelete();
            $table->foreignId('wedding_id')->nullable();
            $table->string('wish_sender_name')->required();
            $table->longText('wish_message')->required();
            $table->boolean('is_selected')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wish_messages');
    }
};
