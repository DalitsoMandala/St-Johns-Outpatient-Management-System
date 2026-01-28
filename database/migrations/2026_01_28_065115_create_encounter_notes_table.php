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
      Schema::create('encounter_notes', function (Blueprint $table) {
    $table->id();

    $table->foreignId('encounter_id')->constrained()->cascadeOnDelete();
    $table->foreignId('queue_ticket_id')->nullable()->constrained('queue_tickets')->nullOnDelete();

    $table->foreignId('department_id')->nullable()->constrained('departments')->nullOnDelete();
    $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete();

    $table->string('type', 50)->default('note'); // vitals_note|doctor_note|lab_note|handover|etc
    $table->text('note')->nullable();

    $table->json('data')->nullable(); // store structured values (optional)

    $table->timestamps();

    $table->index(['encounter_id', 'department_id']);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encounter_notes');
    }
};
