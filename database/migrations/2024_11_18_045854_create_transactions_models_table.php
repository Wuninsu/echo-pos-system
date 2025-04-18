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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('set null');
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->string('transaction_number')->unique();
            $table->decimal('amount_paid', 10, 2)->default(0.00); // Renamed from mount_paid
            $table->decimal('balance', 10, 2)->default(0.00);
            $table->string('payment_method')->default('cash')->comment(':cash,:online');
            $table->decimal('transact_amount', 10, 2)->default(0.00);
            $table->timestamp('transact_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
