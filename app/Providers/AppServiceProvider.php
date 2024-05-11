<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        View::composer('*', function ($view) {
            $user = auth()->user();
            $lastViewedProducts = [];

            $categories = Category::select('id', 'category_name')->get();

            if ($user && $user->last_viewed) {
                $lastViewed = json_decode($user->last_viewed, true) ?: [];
                $lastViewedIds = array_column($lastViewed, 'product_id');

                // Fetch the last viewed products with their first image
                $lastViewedProducts = Product::with('images')->whereIn('id', $lastViewedIds)->get()->each(function ($last_product) {
                    $firstImage = $last_product->images->first(); // Get the first image if exists
                    $imagePath = $firstImage ? 'storage/images/' . $last_product->id . '/' . $firstImage->image_name : 'storage/images/default.png';
                    $last_product->image_url = asset($imagePath);
                });
            }

            $view->with([
                'lastViewedProducts' => $lastViewedProducts,
                'categories' => $categories
            ]);

        });
    }
}
