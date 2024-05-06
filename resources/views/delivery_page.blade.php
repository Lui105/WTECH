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
                <p>Payment</p>
            </div>
            <div><i class="bi bi-arrow-right" style="font-size: 40px;"></i></div>
            <div class="text-center">
                <h1><b>3</b></h1>
                <p><b>Delivery details</b></p>
            </div>
        </div>

        <!-- Delivery Section -->
        <div class="mb-4">
            <h3>Choose a delivery method</h3>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="deliveryMethod" id="SlovakParcelservice" value="SlovakParcelservice" checked>
                    <label class="form-check-label h6" for="SlovakParcelservice">
                        Slovak Parcel service - 1.99€
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="deliveryMethod" id="DPD" value="DPD">
                    <label class="form-check-label h6" for="DPD">
                        DPD - 2.99€
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="deliveryMethod" id="GLS" value="GLS">
                    <label class="form-check-label h6" for="GLS">
                        GLS - 2.49€
                    </label>
                </div>
            </div>
        </div>


        <!-- Delivery Details -->
        <div>
            <h3>Delivery details</h3>
            <form>
                <div class="form-group">
                    <label for="addressLine1">Address line 1</label>
                    <input type="text" class="form-control" id="addressLine1" placeholder="Miletičova 4">
                </div>
                <div class="form-group">
                    <label for="addressLine2">Address line 2</label>
                    <input type="text" class="form-control" id="addressLine2" placeholder="Apartment n. 2">
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="ZIP">ZIP Code</label>
                        <input type="text" class="form-control" id="ZIP" placeholder="814 05">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="City">City</label>
                        <input type="text" class="form-control" id="City" placeholder="Bratislava">
                    </div>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" placeholder="Slovakia">
                </div>
            </form>
        </div>
        <!-- Delivery Details -->
        <div>
            <h3>Personal information</h3>
            <form>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="John">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Doe">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" class="form-control" id="phoneNumber" placeholder="+421 903 123 456">
                </div>
                <div class="form-group">
                    <label for="emailAddress">Email Address</label>
                    <input type="text" class="form-control" id="emailAddress" placeholder="john.doe@gmail.com">
                </div>


            </form>
            <div class="text-right">
                <h5>In total: 156 €</h5>
                <button type="submit" class="btn btn-primary">Continue</button>
            </div>
        </div>
    </div>
@endsection


