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
                <p>Delivery details</p>
            </div>
            <div><i class="bi bi-arrow-right" style="font-size: 40px;"></i></div>
            <div class="text-center">
                <h2>3</h2>
                <p>Payment</p>
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
                    @include('components.cart_product_clickpoint')
                @endforeach
            @endif
        </div>

        <!-- Total Section -->
        <div class="text-right mb-4">
            @if($products->isEmpty())
            @else
                <h5>Total: {{$order->total_price}} €</h5>
                <a href = "{{route('delivery')}}"type="button" class="btn btn-primary">Continue</a>
            @endif
        </div>
    </div>
@endsection
