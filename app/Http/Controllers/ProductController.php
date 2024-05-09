<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        $cat_name = 'Popular';
        if ($request->has('category')) {
            $categoryId = $request->category;
            $query->whereHas('categories', function ($q) use ($categoryId) {
                $q->where('category_id', '=', $categoryId);
            });
            $cat_name = Category::where('id', $categoryId)->value('category_name');

        }


        $products = $query->paginate(24);

        $parameters = Product::whereNotNull('parameters')->pluck('parameters');
        $colors = collect($parameters)->map(function ($param) {
            return $param['color'] ?? null;
        })->filter()->unique()->values();

        $brands = Product::query()->select('brand')->distinct()->pluck('brand');

        $products->each(function ($product) {
            $firstImage = $product->images->first();  // Get the first image if exists
            $imagePath = $firstImage ? 'storage/images/' . $product->id . '/' . $firstImage->image_name : 'storage/images/default.png';
            $product->image_url = asset($imagePath);
        });





        return view('products.index', compact('products', 'brands', 'colors', 'cat_name'));
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
     * Display the specified resource.
     */
    public function product_detail(Product $product)
    {
        $product = Product::with('images')->findOrFail($product->id);

        return view('product_detail', compact('product'));
    }

    public function store(Request $request)
    {
        Log::info('Received data:', $request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categories.*' => 'exists:categories,id',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->parameters = $this->prepareParameters($request->input('paramName'), $request->input('paramValue'));
        $product->save();
        Log::info('savelosa');

        if ($request->hasFile('images')) {
            $folderPath = 'images/' . $product->id;
            $storagePath = storage_path($folderPath);

            if (!file_exists($storagePath)) {
                mkdir($storagePath, 0777, true);
            }
            Log::info('tuto som ved');
            foreach ($request->file('images') as $image) {
                Log::info($folderPath);
                $filename = $image->store($folderPath, 'public');
                $product->images()->create(['image_name' => basename($filename)]);
            }
        }

        if (!empty($request->categories)) {
            $product->categories()->attach($request->categories);
        }

        return redirect()->route('products')->with('success', 'Product created successfully!');
    }


    /**
     * Prepare parameters array for storing in JSON format.
     *
     * @param  array  $names
     * @param  array  $values
     * @return array
     */
    protected function prepareParameters($names, $values)
    {
        $parameters = [];
        foreach ($names as $index => $name) {
            if (!empty($name) && !empty($values[$index])) {
                $parameters[$name] = $values[$index];
            }
        }
        return $parameters;
    }



    public function updateLastViewed($id)
    {
        $product = Product::findOrFail($id);
        $user = Auth::user();

        if ($user) {
            $lastViewed = json_decode($user->last_viewed, true);
            if (is_null($lastViewed)) {
                $lastViewed = [];
            }

            array_unshift($lastViewed, [
                'product_id' => $product->id,
                'product_name' => $product->name
            ]);

            $lastViewed = array_slice($lastViewed, 0, 2);

            $user->last_viewed = json_encode($lastViewed);
            $user->save();
        }

        return redirect()->route('products.show', $id);
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
