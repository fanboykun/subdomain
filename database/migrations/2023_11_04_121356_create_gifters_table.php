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
        Schema::create('gifters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->required()->constrained()->cascadeOnDelete();
            $table->foreignId('bank_information_id')->required()->constrained()->cascadeOnDelete();
            $table->string('gifter_name')->required();
            $table->string('gifter_account_name')->required();
            $table->string('gift_message')->required();
            $table->double('amount')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gifters');
    }
};
