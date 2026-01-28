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
       Schema::create('invoices', function (Blueprint $table) {
    $table->id();

    $table->foreignId('encounter_id')->constrained()->cascadeOnDelete();
    $table->foreignId('patient_id')->constrained()->cascadeOnDelete();

    $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete(); // cashier

    $table->decimal('subtotal', 12, 2)->default(0);
    $table->decimal('discount', 12, 2)->default(0);
    $table->decimal('total', 12, 2)->default(0);

    $table->string('status', 20)->default('unpaid'); // unpaid|partial|paid|void
    $table->timestamp('issued_at')->useCurrent();

    $table->timestamps();

    $table->index(['encounter_id', 'status']);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
