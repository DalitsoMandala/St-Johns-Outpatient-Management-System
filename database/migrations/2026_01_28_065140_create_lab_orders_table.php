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
       Schema::create('lab_orders', function (Blueprint $table) {
    $table->id();

    $table->foreignId('encounter_id')->constrained()->cascadeOnDelete();
    $table->foreignId('queue_ticket_id')->nullable()->constrained('queue_tickets')->nullOnDelete();

    $table->foreignId('ordered_by')->nullable()->constrained('users')->nullOnDelete();

    $table->string('status', 20)->default('ordered'); // ordered|processing|resulted|cancelled
    $table->text('notes')->nullable();

    $table->timestamp('ordered_at')->useCurrent();
    $table->timestamps();

    $table->index(['encounter_id', 'status']);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_orders');
    }
};
