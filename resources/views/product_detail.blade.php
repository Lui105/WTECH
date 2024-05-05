@extends('layouts.main')

@section('title', 'Clickpoint')

@section('content')
    <div class="col-md-10">
        <div class="row">
            <!-- Main Product Image -->
            <div class="col-lg-5">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Main Product" class="img-fluid" style="max-height: 600px;">
                <h5 class="mt-4">Gallery</h5>
                <div class="row">
                    <div class="col-3 mb-3">
                        <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Thumbnail" class="img-fluid">
                    </div>
                    <div class="col-3 mb-3">
                        <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Thumbnail" class="img-fluid">
                    </div>
                    <div class="col-3 mb-3">
                        <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Thumbnail" class="img-fluid">
                    </div>
                    <div class="col-3 mb-3">
                        <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Thumbnail" class="img-fluid">
                    </div>
                    <div class="col-3 mb-3">
                        <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Thumbnail" class="img-fluid">
                    </div>
                    <div class="col-3 mb-3">
                        <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Thumbnail" class="img-fluid">
                    </div>
                    <div class="col-3 mb-3">
                        <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Thumbnail" class="img-fluid">
                    </div>
                    <div class="col-3">
                        <button type="button" class="btn btn-outline-secondary btn-block">View all</button>
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-6">
                <h2>{{ $product->name }}</h2>
                <p class="{{ $product->status == 'Out of stock' ? 'text-danger' : 'text-success' }}">
                    {{ $product->status }}
                </p>
                <h3>{{ $product->price }} €</h3>
                <div class="d-flex align-items-center mb-3">
                    <input type="number" class="form-control mx-2" value="1" min="1" aria-label="Quantity" style="width: 60px;">
                    <button type="button" class="btn btn-success ml-3">
                        <i class="bi bi-cart"></i> Add to Cart
                    </button>
                </div>
                <h4>Description</h4>
                <p>{{ $product->description }}</p>

                <h4>Parameters</h4>
                <table class="table">
                    @if(is_array($product->parameters) && !empty($product->parameters))
                        @foreach($product->parameters as $key => $value)
                            <tr>
                                <th>{{ $key }}</th>
                                <td>{{ $value }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">No additional parameters available.</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection

