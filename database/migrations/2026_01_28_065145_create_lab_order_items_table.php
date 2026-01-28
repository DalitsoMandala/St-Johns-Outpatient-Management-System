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
       Schema::create('lab_order_items', function (Blueprint $table) {
    $table->id();
    $table->foreignId('lab_order_id')->constrained()->cascadeOnDelete();

    $table->string('test_name');        // e.g. Malaria, CBC
    $table->string('specimen')->nullable(); // blood, urine
    $table->string('status', 20)->default('ordered'); // ordered|resulted

    $table->text('result_text')->nullable();
    $table->json('result_data')->nullable();
    $table->timestamp('resulted_at')->nullable();

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_order_items');
    }
};
