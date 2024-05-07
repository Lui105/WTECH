<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(50)->create()->each(function ($product){
            $directoryPath = storage_path('app/public/images/' . $product->id);
            if (!File::isDirectory($directoryPath)) {
                File::makeDirectory($directoryPath, 0755, true); // Ensure the directory exists
            }
        });

    }
}
