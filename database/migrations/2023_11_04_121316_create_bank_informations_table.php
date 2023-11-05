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
        Schema::create('bank_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wedding_id')->required()->constrained()->cascadeOnDelete();
            $table->string('account_name_holder')->required();
            $table->enum('bank_type', ['BNI', 'BCA', 'BRI', 'MANDIRI'])->required();
            $table->string('account_number')->required();
            $table->string('account_qrcode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_information');
    }
};
