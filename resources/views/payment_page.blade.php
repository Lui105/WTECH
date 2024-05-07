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
        <div class="mb-4">
            <h3>Choose a payment method</h3>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="visa" value="visa" checked>
                    <label class="form-check-label h6" for="visa">
                        Visa
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="Mastercard" value="Mastercard">
                    <label class="form-check-label h6" for="Mastercard">
                        Mastercard
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="paypal" value="paypal">
                    <label class="form-check-label h6" for="paypal">
                        Paypal
                    </label>
                </div>
            </div>
        </div>


        <!-- Payment Details -->
        <div>
            <h3>Payment details</h3>
            <form>
                <div class="form-group">
                    <label for="creditCardNumber">Credit card number</label>
                    <input type="text" class="form-control" id="creditCardNumber" placeholder="1234 5678 1234 5678">
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="cardExpirationDate">Card expiration date</label>
                        <input type="text" class="form-control" id="cardExpirationDate" placeholder="10/28">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cardSecurityCode">Card security code</label>
                        <input type="text" class="form-control" id="cardSecurityCode" placeholder="123">
                    </div>
                </div>
                <div class="text-right">
                    <h5>In total: 156 €</h5>
                    <button type="submit" class="btn btn-primary">Continue</button>
                </div>
            </form>
        </div>
    </div>
@endsection

