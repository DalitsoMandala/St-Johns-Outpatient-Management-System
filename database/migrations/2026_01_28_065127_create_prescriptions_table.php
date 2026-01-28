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
      Schema::create('prescriptions', function (Blueprint $table) {
    $table->id();

    $table->foreignId('encounter_id')->constrained()->cascadeOnDelete();
    $table->foreignId('queue_ticket_id')->nullable()->constrained('queue_tickets')->nullOnDelete();

    $table->foreignId('prescriber_id')->nullable()->constrained('users')->nullOnDelete();

    $table->string('status', 20)->default('active'); // active|dispensed|partial|cancelled
    $table->text('notes')->nullable();

    $table->timestamps();

    $table->index(['encounter_id', 'status']);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
