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
       Schema::create('vitals', function (Blueprint $table) {
    $table->id();

    $table->foreignId('encounter_id')->constrained()->cascadeOnDelete();
    $table->foreignId('queue_ticket_id')->nullable()->constrained('queue_tickets')->nullOnDelete();

    $table->foreignId('recorded_by')->nullable()->constrained('users')->nullOnDelete();

    $table->unsignedSmallInteger('bp_systolic')->nullable();
    $table->unsignedSmallInteger('bp_diastolic')->nullable();
    $table->unsignedSmallInteger('pulse')->nullable();
    $table->decimal('temperature', 4, 1)->nullable();
    $table->decimal('weight', 6, 2)->nullable();
    $table->decimal('height', 6, 2)->nullable();
    $table->unsignedSmallInteger('resp_rate')->nullable();
    $table->unsignedSmallInteger('spo2')->nullable();

    $table->text('notes')->nullable();

    $table->timestamp('recorded_at')->useCurrent();
    $table->timestamps();

    $table->index(['encounter_id', 'recorded_at']);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vitals');
    }
};
