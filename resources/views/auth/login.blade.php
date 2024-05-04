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

<!-- Navigation Bar -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">ClickPoint</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard') }}">Home <span class="sr-only">(current)</span></a>
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

<!-- Main content -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 mt-5">
                <!-- Card for Login Form -->
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">ClickPoint</h4>
                        <p class="text text-center">Log into your account</p>
                        <hr>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf <!-- CSRF Token for Laravel -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <input id="email" name="email" class="form-control" placeholder="Enter email" type="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input id="password" name="password" class="form-control" placeholder="Enter password" type="password" required>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('password.request') }}" class="btn btn-link">Forgot password?</a>
                            </div>
                            <div class="text-center mt-2">
                                <a href="{{ route('register') }}" class="btn btn-link">Create new account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
