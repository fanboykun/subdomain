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
        Schema::create('bridegrooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->required()->constrained()->cascadeOnDelete();
            $table->string('bride')->required();
            $table->string('groom')->required();
            $table->string('main_bride_picture')->required();
            $table->string('main_groom_picture')->required();
            $table->string('bride_instagram')->nullable();
            $table->string('groom_instagram')->nullable();
            $table->string('bride_bio')->nullable();
            $table->string('groom_bio')->nullable();
            $table->boolean('is_parent_name_visible')->default(false);
            $table->string('bride_father_name')->nullable();
            $table->string('bride_mother_name')->nullable();
            $table->string('groom_father_name')->nullable();
            $table->string('groom_mother_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bridegrooms');
    }
};
