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
      Schema::create('invoice_items', function (Blueprint $table) {
    $table->id();
    $table->foreignId('invoice_id')->constrained()->cascadeOnDelete();

    $table->string('item_type', 20); // service|drug|lab|other
    $table->string('description');
    $table->unsignedInteger('quantity')->default(1);

    $table->decimal('unit_price', 12, 2)->default(0);
    $table->decimal('amount', 12, 2)->default(0);

    // link back to what generated this line (optional)
    $table->unsignedBigInteger('reference_id')->nullable();
    $table->string('reference_table')->nullable();

    $table->timestamps();

    $table->index(['item_type']);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
