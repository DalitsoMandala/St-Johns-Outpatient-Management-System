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
        Schema::create('queue_tickets', function (Blueprint $table) {
            $table->id();

            $table->foreignId('encounter_id')->constrained()->cascadeOnDelete();
            $table->foreignId('patient_id')->constrained()->cascadeOnDelete(); // denormalized for fast access

            $table->foreignId('from_department_id')->nullable()->constrained('departments')->nullOnDelete();
            $table->foreignId('to_department_id')->constrained('departments')->cascadeOnDelete();

            $table->string('priority', 20)->default('normal'); // normal|urgent|emergency
            $table->string('status', 20)->default('waiting');  // waiting|in_progress|done|cancelled

            // notes from sender (e.g. doctor to lab: “CBC + Malaria test”)
            $table->text('note')->nullable();

            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete(); // who sent
            $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete(); // optional

            $table->timestamp('queued_at')->useCurrent();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('finished_at')->nullable();

            // if patient is sent back, link the chain (optional but useful)
            $table->foreignId('parent_ticket_id')->nullable()->constrained('queue_tickets')->nullOnDelete();

            $table->timestamps();

            $table->index(['to_department_id', 'status', 'priority']);
            $table->index(['encounter_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queue_tickets');
    }
};
