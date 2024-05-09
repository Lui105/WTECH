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
        DB::table('delivery_methods')->insert([
                ['type' => 'GLS', 'price' => 2.99],
                ['type' => 'DPD', 'price' => 2.49],
                ['type' => 'SlovakParcelService', 'price' => 3.49],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('delivery_methods', function (Blueprint $table) {
            //
        });
    }
};
