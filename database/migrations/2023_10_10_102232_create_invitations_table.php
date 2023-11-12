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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->required()->nullOnDelete();
            $table->foreignId('preset_id')->nullable()->nullOnDelete(); // should be required, but let it be nullable for now :)
            $table->string('title')->required(); // main invitation title
            $table->string('subdomain')->unique()->required();
            $table->date('main_wedding_date')->nullable(); // shouldn't be here, but let it be here for now :)
            $table->enum('status', ['draft', 'published', 'frozen'])->default('draft'); // invitation status
            $table->enum('type', ['influencer', 'custom', 'common'])->default('common'); // customer status
            $table->enum('planning_step', ['not_yet_engaged', 'newly_engaged', 'already_planning', 'almost_done'])->required(); // customer plan steap
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
