<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('max_price')) {
            $max_price = $request->max_price;
            $query->where('price', '<=', $max_price);
        }

        if ($request->has('sort')) {
            $sortOrder = $request->sort == 'asc' ? 'asc' : 'desc';
            $query->orderBy('price', $sortOrder);
        }
        if ($request->has('color')) {
            $color = $request->color;
            $query->where('parameters->color', '=', $color);
        }

        if ($request->has('brand')) {
            $brand = $request->brand;
            $query->where('brand', '=', $brand);
        }

        if ($request->has('search')) {
            $searchQuery = $request->input('search');
            $query->where('name', 'like', '%' . $searchQuery . '%');
        }


        // After ensuring directories, continue to paginate
        $products = $query->paginate(24);

        // Fetch distinct colors and brands for filters
        $parameters = Product::whereNotNull('parameters')->pluck('parameters');
        $colors = collect($parameters)->map(function ($param) {
            return $param['color'] ?? null;
        })->filter()->unique()->values();

        $brands = Product::query()->select('brand')->distinct()->pluck('brand');

        $products->each(function ($product) {
            $firstImage = $product->images->first();  // Get the first image if exists
            $imagePath = $firstImage ? 'images/' . $product->id . '/' . $firstImage->image_name : 'images/default.jpg';
            $product->image_url = asset($imagePath);
        });

        return view('products.index', compact('products', 'brands', 'colors'));
    }

    public function admin_view()
    {
        $products = Product::paginate(24);
        return view('admin_view', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function product_detail(Product $product)
    {
        $product = Product::with('images')->findOrFail($product->id);

        return view('product_detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
