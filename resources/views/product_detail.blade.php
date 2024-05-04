<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClickPoint</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .nav-link {
            display: flex;
            align-items: center;
            height: 100%;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<header>
    @include('components.navbar_clickpoint')
</header>

<!-- Main content -->
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
                <!-- Products -->
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
            </div>
        </main>

    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
