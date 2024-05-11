<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        $categories = [
            'Ergonomic Mice',
            'Gaming Mice',
            'Wireless Mice',
            'Wired Mice',
            'Bluetooth Mice',
            'Trackball Mice',
            'Office Mice'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'category_name' => $category,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::table('categories')->whereIn('category_name', [
            'Ergonomic Mice',
            'Gaming Mice',
            'Wireless Mice',
            'Wired Mice',
            'Bluetooth Mice',
            'Trackball Mice',
            'Vertical Mice'
        ])->delete();
    }
};
