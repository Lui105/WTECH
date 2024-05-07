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
        DB::table('payment_details')->insert([
                ['payment_method' => 'PayPal'],
                ['payment_method' => 'Visa'],
                ['payment_method' => 'Mastercard']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
