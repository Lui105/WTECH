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
        <div class="col-md-10">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Popular</h4>
            <div class="d-flex align-items-center">
              <h5 class="mr-5">Filter by</h5>
              <div class="form-group mb-2 mr-4">
                <label for="rangeSlider">Max price: 50</label>
                <input type="range" class="form-control-range" id="rangeSlider">
              </div>
              <button class="btn-lg mr-5">
                <i class="bi bi-arrow-down-up"></i>
              </button>


              <!-- First Dropdown for Filter -->
              <div class="dropdown d-inline-block">
                <button class="btn btn-secondary dropdown-toggle btn-lg" type="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Select color
                </button>
                <div class="dropdown-menu" aria-labelledby="filterDropdown">
                  <a class="dropdown-item" href="#">Option 1</a>
                  <a class="dropdown-item" href="#">Option 2</a>
                  <a class="dropdown-item" href="#">Option 3</a>
                </div>
              </div>

              <!-- Second Dropdown for Sorting -->
              <div class="dropdown d-inline-block ml-2">
                <button class="btn btn-secondary dropdown-toggle btn-lg" type="button" id="sortDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Select brand
                </button>
                <div class="dropdown-menu" aria-labelledby="sortDropdown">
                  <a class="dropdown-item" href="#">Brand 1</a>
                  <a class="dropdown-item" href="#">Brand 2</a>
                  <a class="dropdown-item" href="#">Brand 3</a>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
  <!--Products-->
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product</h5>
                  <p class="card-text">55.60€</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

  </div>
  <nav aria-label="Page navigation" class="d-flex justify-content-center mt-4">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <!-- Pagination numbers -->
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
