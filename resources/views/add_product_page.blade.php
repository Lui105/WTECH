@extends('layouts.main')

@section('title', 'Clickpoint')

@section('content')
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
@endsection

