<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClickPoint</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">ClickPoint</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>
            </ul>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link"><i class="bi bi-cart" style="font-size: 30px;"></i></a>
                <a href="#" class="nav-item nav-link"><i class="bi bi-person" style="font-size: 30px;"></i></a>
                <a href="#" class="nav-item nav-link"><i class="bi bi-box-arrow-right" style="font-size: 30px;"></i></a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<section>
    <div class="container-fluid mt-4">
        <!-- Category and Product List -->
        <main>
            <div class="row">
                <!-- Category List -->
                <div class="col-md-2">
                    <h4>Categories</h4>
                    <div class="list-group mb-3">
                        <a href="#" class="list-group-item list-group-item-action">1st category</a>
                        <a href="#" class="list-group-item list-group-item-action">2nd category</a>
                        <a href="#" class="list-group-item list-group-item-action">3rd category</a>
                        <a href="#" class="list-group-item list-group-item-action">4th category</a>
                        <a href="#" class="list-group-item list-group-item-action">5th category</a>
                        <a href="#" class="list-group-item list-group-item-action">6th category</a>
                        <a href="#" class="list-group-item list-group-item-action">7th category</a>
                        <a href="#" class="list-group-item list-group-item-action">8th category</a>
                        <a href="#" class="list-group-item list-group-item-action">9th category</a>
                        <a href="#" class="list-group-item list-group-item-action">10th category</a>


                    </div>
                    <div style="max-width: 200px;">
                        <h4>Last viewed</h4>
                        <div class="card mb-2">
                            <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Product 1">
                            <div class="card-body">
                                <h6 class="card-title">Product 1</h6>
                                <p class="card-text">55.60€</p>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Product 1">
                            <div class="card-body">
                                <h6 class="card-title">Product 1</h6>
                                <p class="card-text">55.60€</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Content -->
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
            </div>
        </main>

    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
