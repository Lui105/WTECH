@extends('layouts.main')

@section('title', 'Clickpoint')

@section('content')
<div class="col-md-10">
    <!-- Checkout Steps -->
    <div class="d-flex justify-content-around align-items-center mb-4">
        <div class="text-center">
            <h2>1</h2>
            <p>Cart</p>
        </div>
        <div><i class="bi bi-arrow-right" style="font-size: 40px;"></i></div>
        <div class="text-center">
            <h1><b>2</b></h1>
            <p><b>Delivery details</b></p>
        </div>
        <div><i class="bi bi-arrow-right" style="font-size: 40px;"></i></div>
        <div class="text-center">
            <h2>3</h2>
            <p>Payment</p>
        </div>
    </div>

    <!-- Form for Delivery Details and Personal Information -->
    <form action="{{ route('submit.delivery.details') }}" method="POST">
        @csrf

        <!-- Delivery Section -->
        <div class="mb-4">
            <h3>Choose a delivery method</h3>
            <div>
                @foreach($deliveryMethods as $method)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="deliveryMethod" id="{{ $method->type }}" value="{{ $method->id }}" {{ $loop->first ? 'checked' : '' }}>
                    <label class="form-check-label h6" for="{{ $method->type }}">
                        {{ $method->type }} - {{ number_format($method->price, 2) }}€
                    </label>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Address Details -->
        <div>
            <h3>Delivery details</h3>
            <div class="form-group">
                <label for="addressLine1">Address line 1</label>
                <input type="text" class="form-control" id="addressLine1" name="addressLine1" placeholder="Miletičova 4">
            </div>
            <div class="form-group">
                <label for="addressLine2">Address line 2</label>
                <input type="text" class="form-control" id="addressLine2" name="addressLine2" placeholder="Apartment n. 2">
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="ZIP">ZIP Code</label>
                    <input type="text" class="form-control" id="ZIP" name="ZIP" placeholder="814 05">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="City">City</label>
                    <input type="text" class="form-control" id="City" name="City" placeholder="Bratislava">
                </div>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Slovakia">
            </div>
        </div>

        <!-- Personal Information -->
        <div>
            <h3>Personal information</h3>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="John">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe">
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="+421 903 123 456">
            </div>
            <div class="form-group">
                <label for="emailAddress">Email Address</label>
                <input type="text" class="form-control" id="emailAddress" name="emailAddress" placeholder="john.doe@gmail.com">
            </div>
        </div>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="text-right">
            <h5>In total: {{ $totalPrice }} €</h5>
            <button type="submit" class="btn btn-primary">Continue</button>
        </div>
    </form>
</div>
@endsection
