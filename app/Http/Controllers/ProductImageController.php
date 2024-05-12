<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use App\Http\Requests\StoreProductImageRequest;
use App\Http\Requests\UpdateProductImageRequest;
use Illuminate\Support\Facades\File;


class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store()
    {
        // Assuming that the validation rules are set in StoreProductImageRequest for 'image'
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductImage $productImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductImage $productImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductImageRequest $request, ProductImage $productImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductImage $productImage)
    {
        //
    }

    public function delete_image($id)
    {
        $image = ProductImage::findOrFail($id);
        $imagePath = storage_path('app/public/images/' . $image->product_id . '/' . $image->image_name);

        // Delete the file from storage
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Delete the record from the database
        $image->delete();

        return back()->with('success', 'Image deleted successfully');
    }
}
