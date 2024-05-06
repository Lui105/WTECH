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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') -> nullable()->constrained('users')->onDelete('set null');
            $table->char('order_number', 12);
            $table->enum('status', ['In cart','Paid','Delivering','Delivered']);
            $table->foreignId('address_id') -> nullable()->constrained('address')->onDelete('set null');
            $table->foreignId('payment_id') -> nullable()->constrained('payment_details')->onDelete('set null');
            $table->foreignId('delivery_id') -> nullable()->constrained('delivery_method')->onDelete('set null');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
