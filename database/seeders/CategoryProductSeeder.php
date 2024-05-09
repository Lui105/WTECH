<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class CategoryProductSeeder extends Seeder
{
    public function run()
    {
        // Assuming you have a reasonable number of categories and products
        $categoryIds = Category::pluck('id');
        $productIds = Product::pluck('id');

        foreach ($productIds as $productId) {
            // Attach each product to 1-3 random categories
            $categoriesToAttach = $categoryIds->random(rand(1, 3));
            Product::find($productId)->categories()->attach($categoriesToAttach);
        }
    }
}
