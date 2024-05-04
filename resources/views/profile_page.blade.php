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
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="text-center content border px-3" style="background-color: #f8f9fa;">
                                <i class="bi bi-person-circle icon" style="font-size: 60px;"></i>
                                <h2 class="mt-3">User Settings</h2>
                                <!-- Change Username -->
                                <div class="mt-4">
                                    <h4>Change Username</h4>
                                    <input type="text" class="form-control" placeholder="New Username">
                                </div>
                                <div class="my-4">
                                    <button class="btn btn-primary">Update Username</button>
                                </div>

                                <!-- Change Password -->
                                <div class="my-4">
                                    <h4>Change Password</h4>
                                    <button class="btn btn-primary mt-3">Change password</button>
                                </div>


                            </div>
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
