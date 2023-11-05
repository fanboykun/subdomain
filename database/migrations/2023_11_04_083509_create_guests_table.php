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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wedding_id')->required()->constrained()->cascadeOnDelete();
            $table->string('guest_name')->required();
            $table->string('guest_email')->nullable();
            $table->string('guest_phone')->nullable();
            $table->enum('guest_type', ['vip', 'common'])->default('common');
            $table->enum('guest_status', ['new', 'openend', 'invited', 'going', 'not_going'])->default('new');
            $table->integer('guest_amount')->default(1);
            $table->string('code')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
