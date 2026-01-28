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
       Schema::create('dispense_items', function (Blueprint $table) {
    $table->id();
    $table->foreignId('dispense_id')->constrained()->cascadeOnDelete();

    $table->foreignId('prescription_item_id')->nullable()->constrained('prescription_items')->nullOnDelete();

    $table->string('drug_name');
    $table->unsignedInteger('quantity_dispensed')->default(0);
    $table->string('batch_no')->nullable();
    $table->date('expiry_date')->nullable();
    $table->text('instructions')->nullable();

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispense_items');
    }
};
