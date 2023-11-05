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
        Schema::create('gifts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wedding_id')->required()->constrained()->cascadeOnDelete();
            $table->string('gift_title')->required();
            $table->longText('gift_description')->nullable();
            $table->boolean('is_form_visible')->default(true);
            $table->boolean('is_publicly_visible')->default(false);
            $table->double('total_amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gifts');
    }
};
