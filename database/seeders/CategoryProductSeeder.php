<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class CategoryProductSeeder extends Seeder
{
    public function run()
    {
        $categoryIds = Category::pluck('id');
        $productIds = Product::pluck('id');

        foreach ($productIds as $productId) {
            $categoriesToAttach = $categoryIds->random(rand(1, 3));
            Product::find($productId)->categories()->attach($categoriesToAttach);
        }
    }
}
