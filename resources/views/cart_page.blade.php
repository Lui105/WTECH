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
    @include('components.navbar_clickpoint')
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
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Image -->
                                    <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Product 1" alt="Product Image" style="width: 100px; height: auto;">

                                    <!-- Product Name -->
                                    <h5 class="card-title mb-0">Product 1 black 256gb 2022 (xyz)</h5>

                                    <!-- Quantity Adjustment -->
                                    <div>
                                        <button class="btn btn-secondary">-</button>
                                        <input type="text" value="3" class="mx-2" style="width: 50px;">
                                        <button class="btn btn-secondary">+</button>
                                    </div>

                                    <button class="btn btn-danger">X</button>

                                    <!-- Total Price -->
                                    <p class="card-text">55.60 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Image -->
                                    <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Product 1" alt="Product Image" style="width: 100px; height: auto;">

                                    <!-- Product Name -->
                                    <h5 class="card-title mb-0">Product 1 black 256gb 2022 (xyz)</h5>

                                    <!-- Quantity Adjustment -->
                                    <div>
                                        <button class="btn btn-secondary">-</button>
                                        <input type="text" value="3" class="mx-2" style="width: 50px;">
                                        <button class="btn btn-secondary">+</button>
                                    </div>

                                    <button class="btn btn-danger">X</button>

                                    <!-- Total Price -->
                                    <p class="card-text">55.60 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Image -->
                                    <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Product 1" alt="Product Image" style="width: 100px; height: auto;">

                                    <!-- Product Name -->
                                    <h5 class="card-title mb-0">Product 1 black 256gb 2022 (xyz)</h5>

                                    <!-- Quantity Adjustment -->
                                    <div>
                                        <button class="btn btn-secondary">-</button>
                                        <input type="text" value="3" class="mx-2" style="width: 50px;">
                                        <button class="btn btn-secondary">+</button>
                                    </div>

                                    <button class="btn btn-danger">X</button>

                                    <!-- Total Price -->
                                    <p class="card-text">55.60 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Image -->
                                    <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Product 1" alt="Product Image" style="width: 100px; height: auto;">

                                    <!-- Product Name -->
                                    <h5 class="card-title mb-0">Product 1 black 256gb 2022 (xyz)</h5>

                                    <!-- Quantity Adjustment -->
                                    <div>
                                        <button class="btn btn-secondary">-</button>
                                        <input type="text" value="3" class="mx-2" style="width: 50px;">
                                        <button class="btn btn-secondary">+</button>
                                    </div>

                                    <button class="btn btn-danger">X</button>

                                    <!-- Total Price -->
                                    <p class="card-text">55.60 €</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Image -->
                                    <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Product 1" alt="Product Image" style="width: 100px; height: auto;">

                                    <!-- Product Name -->
                                    <h5 class="card-title mb-0">Product 1 black 256gb 2022 (xyz)</h5>

                                    <!-- Quantity Adjustment -->
                                    <div>
                                        <button class="btn btn-secondary">-</button>
                                        <input type="text" value="3" class="mx-2" style="width: 50px;">
                                        <button class="btn btn-secondary">+</button>
                                    </div>

                                    <button class="btn btn-danger">X</button>

                                    <!-- Total Price -->
                                    <p class="card-text">55.60 €</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Section -->
                    <div class="text-right mb-4">
                        <h5>In total: 156 €</h5>
                        <button type="button" class="btn btn-primary">Continue</button>
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
