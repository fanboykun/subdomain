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
        Schema::create('personalizeds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->required()->constrained()->cascadeOnDelete();
            $table->boolean('is_greeting_visible')->default(true);
            $table->string('personalized_title')->required();
            $table->longText('personalized_description')->nullable();
            $table->boolean('is_rsvp_visible')->default(true);
            $table->string('going_text')->required();
            $table->string('notgoing_text')->required();
            $table->string('going_message')->required();
            $table->string('notgoing_message')->required();
            $table->date('last_check')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personalizeds');
    }
};
