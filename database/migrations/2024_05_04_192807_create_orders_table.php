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
            $table->uuid('user_id');
            $table->char('order_number', 12);
            $table->string('status');
            $table->id('address_id');
            $table->id('payment_id');
            $table->id('delivery_id');
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('address_id')->references('id')->on('address');
            $table->foreign('payment_id')->references('id')->on('payment_details');
            $table->foreign('delivery_id')->references('id')->on('delivery_method');
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
