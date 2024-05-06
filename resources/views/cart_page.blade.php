@extends('layouts.main')

@section('title', 'Your Cart')

@section('content')
    <div class="col-md-10">
        <!-- Checkout Steps -->
        <div class="d-flex justify-content-around align-items-center mb-4">
            <div class="text-center">
                <h1 class="font-weight-bold">1</h1>
                <p><b>Cart</b></p>
            </div>
            <div><i class="bi bi-arrow-right" style="font-size: 40px;"></i></div>
            <div class="text-center">
                <h2>2</h2>
                <p>Payment</p>
            </div>
            <div><i class="bi bi-arrow-right" style="font-size: 40px;"></i></div>
            <div class="text-center">
                <h2>3</h2>
                <p>Delivery details</p>
            </div>
        </div>

        <!-- Cart Section -->
        <div>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h3>Products</h3>
                <h3>Price</h3>
            </div>
            @if($products->isEmpty())
                <p>Your cart is empty.</p>
            @else
                @foreach ($products as $item)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Image -->
                                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="{{ $item->name }}" style="width: 100px; height: auto;">

                                <!-- Product Name -->
                                <h5 class="card-title mb-0">{{ $item->name }}</h5>


                               <!-- Quantity form -->
                               <form action="{{ route('cart.update', ['productId' => $item->id]) }}" method="POST">
                                   @csrf
                                   <input type="number" name="quantity" value="{{ $item->pivot->quantity }}" min="1" style="width: 50px;">
                                   <button type="submit" class="btn btn-info">Update</button>
                               </form>

                               <!-- Delete form -->
                               <form action="{{ route('cart.delete', $item->id) }}" method="POST">
                                   @csrf
                                   @method('POST')
                                   <input type="hidden" name="productId" value="{{ $item->id }}">
                                   <button type="submit" class="btn btn-danger">Remove</button>
                               </form>

                                <!-- Total Price -->
                                <p class="card-text">{{ $item->price * $item->pivot->quantity}} €</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <!-- Total Section -->
        <div class="text-right mb-4">
            <h5>Total: {{$order->total_price}} €</h5>
            <button type="button" class="btn btn-primary">Continue</button>
        </div>
    </div>
@endsection
