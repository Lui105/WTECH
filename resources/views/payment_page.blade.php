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
            <h2>2</h2>
            <p>Delivery details</p>
        </div>
        <div><i class="bi bi-arrow-right" style="font-size: 40px;"></i></div>
        <div class="text-center">
            <h1><b>3</b></h1>
            <p><b>Payment</b></p>
        </div>
    </div>

    <!-- Payment Section -->
    <form action="{{ route('payment.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <h3>Choose a payment method</h3>
            @foreach($paymentDetails as $method)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="{{ $method->type }}" value="{{ $method->id }}" {{ $loop->first ? 'checked' : '' }}>
                <label class="form-check-label h6" for="{{ $method->type }}">
                    {{ $method->payment_method }}
                </label>
            </div>
            @endforeach
        </div>

        <!-- Payment Details -->
        <div>
            <h3>Payment details</h3>
            <div class="form-group">
                <label for="creditCardNumber">Credit card number</label>
                <input type="text" class="form-control" id="creditCardNumber" name="creditCardNumber" placeholder="1234 5678 1234 5678">
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="cardExpirationDate">Card expiration date</label>
                    <input type="text" class="form-control" id="cardExpirationDate" name="cardExpirationDate" placeholder="10/28">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cardSecurityCode">Card security code</label>
                    <input type="text" class="form-control" id="cardSecurityCode" name="cardSecurityCode" placeholder="123">
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
                <h5>In total: {{$totalPrice}} €</h5>
                <button type="submit" class="btn btn-primary">Continue</button>
            </div>
        </div>
    </form>
</div>
@endsection
