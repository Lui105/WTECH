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
                <div class="container mt-5">
                    <h2 class="mb-4">About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempor mollis pretium. Donec cursus eros ultrices, malesuada arcu id, dictum tortor.
                        Cras accumsan augue orci, vitae vulputate est auctor dapibus. Mauris aliquam turpis vel scelerisque condimentum. Aenean tincidunt felis ut auctor bibendum.
                        Cras convallis in risus eu finibus. Donec diam augue,
                        blandit convallis turpis egestas, pulvinar placerat turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                    <h3 class="mt-5">Our Mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempor mollis pretium. Donec cursus eros ultrices, malesuada arcu id, dictum tortor.
                        Cras accumsan augue orci, vitae vulputate est auctor dapibus. Mauris aliquam turpis vel scelerisque condimentum. Aenean tincidunt felis ut auctor bibendum.
                        Cras convallis in risus eu finibus. Donec diam augue,
                        blandit convallis turpis egestas, pulvinar placerat turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>


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
