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
            $table->uuid('uuid')->unique()->nullable();
            $table->string('invoice_number')->unique();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->date('invoice_date')->default(now()); // Date of invoice generation
            $table->decimal('total_amount', 10, 2);
            $table->decimal('tax_amount', 10, 2)->default(0.00);
            $table->decimal('discount', 10, 2)->default(0.00);
            $table->enum('status', ['unpaid', 'paid', 'canceled'])->default('unpaid');
            $table->softDeletes();
            $table->timestamps();
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
