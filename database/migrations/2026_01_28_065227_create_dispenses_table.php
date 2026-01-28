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
        Schema::create('dispenses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('encounter_id')->constrained()->cascadeOnDelete();
            $table->foreignId('queue_ticket_id')->nullable()->constrained('queue_tickets')->nullOnDelete();

            $table->foreignId('prescription_id')->nullable()->constrained('prescriptions')->nullOnDelete();
            $table->foreignId('dispensed_by')->nullable()->constrained('users')->nullOnDelete();

            $table->string('status', 20)->default('pending'); // pending|partial|dispensed|cancelled
            $table->text('notes')->nullable();

            $table->timestamp('dispensed_at')->nullable();
            $table->timestamps();

            $table->index(['encounter_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispenses');
    }
};
