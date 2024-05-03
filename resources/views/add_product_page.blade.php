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
                <section class="container mt-4">
                    <h2>Create New Product</h2>
                    <form>
                        <div class="form-group mt-4">
                            <h5 for="productName">Product Name</h5>
                            <input type="text" class="form-control" id="productName" placeholder="Enter product name">
                        </div>
                        <div class="form-group">
                            <h5 for="productCategory">Categories</h5>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Choose categories
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <form id="categoryForm">
                                        <a class="dropdown-item">
                                            <input type="checkbox" name="categories" value="gaming"> Gaming
                                        </a>
                                        <a class="dropdown-item">
                                            <input type="checkbox" name="categories" value="basic"> Basic
                                        </a>
                                        <a class="dropdown-item">
                                            <input type="checkbox" name="categories" value="wireless"> Wireless
                                        </a>
                                        <a class="dropdown-item">
                                            <input type="checkbox" name="categories" value="wired"> Wired
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <small class="form-text text-muted">
                                Select multiple categories from the dropdown.
                            </small>
                        </div>
                        <div class="form-group">
                            <h5 for="productPrice">Price</h5>
                            <input type="number" class="form-control" id="productPrice" placeholder="Enter price">
                        </div>
                        <div class="form-group">
                            <h5 for="productDescription">Description</h5>
                            <textarea class="form-control" id="productDescription" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <h5 for="productImages">Product Images</h5>
                            <input type="file" class="form-control-file" id="productImages" multiple>
                        </div>
                        <div class="form-group mt-4">
                            <h5>Product Parameters</h5>
                            <div class="table-responsive mt-3">
                                <table class="table" id="parametersTable">
                                    <thead>
                                    <tr>
                                        <th>Parameter Name</th>
                                        <th>Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control" name="paramName[]" placeholder="Name"></td>
                                        <td><input type="text" class="form-control" name="paramValue[]" placeholder="Value"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="paramName[]" placeholder="Name"></td>
                                        <td><input type="text" class="form-control" name="paramValue[]" placeholder="Value"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="paramName[]" placeholder="Name"></td>
                                        <td><input type="text" class="form-control" name="paramValue[]" placeholder="Value"></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-row mb-5">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Create Product</button>
                            </div>
                            <div class="col text-right">
                                <button type="button" class="btn btn-outline-primary" id="addRowBtn"><i class="bi bi-plus-lg"></i> Add Parameter</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </main>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
