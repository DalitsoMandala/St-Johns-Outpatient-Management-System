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
       Schema::create('encounters', function (Blueprint $table) {
    $table->id();

    $table->foreignId('patient_id')->constrained()->cascadeOnDelete();

    // check-in details
    $table->timestamp('checked_in_at')->useCurrent();
    $table->foreignId('checked_in_by')->nullable()->constrained('users')->nullOnDelete();
    $table->string('checkin_type', 20)->default('returning'); // new|returning
    $table->string('chief_complaint')->nullable();

    // encounter status
    $table->string('status', 20)->default('open'); // open|closed|cancelled
    $table->timestamp('closed_at')->nullable();
    $table->foreignId('closed_by')->nullable()->constrained('users')->nullOnDelete();

    $table->timestamps();

    $table->index(['patient_id', 'status']);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encounters');
    }
};
