@extends('layouts.main')

@section('title', 'Clickpoint')

@section('content')
    <section class="container mt-4">
        <h2>Create New Product</h2>
        <form action="{{ route('add_product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-4">
                <h5>Product Name</h5>
                <input type="text" class="form-control" placeholder="Enter product name" name="name">
            </div>
            <div class="form-group">
                <h5 for="productCategory">Categories</h5>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Choose categories
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach($categories as $cat_name)
                            <a class="dropdown-item">
                                <input type="checkbox" name="categories[]" value={{ $cat_name->id }}> {{$cat_name->category_name}}
                            </a>
                        @endforeach
                    </div>
                </div>
                <small class="form-text text-muted">
                    Select multiple categories from the dropdown.
                </small>
            </div>
            <div class="form-group">
                <h5>Price</h5>
                <input type="number" class="form-control" placeholder="Enter price" name="price">
            </div>
            <div class="form-group">
                <h5>Description</h5>
                <textarea class="form-control" rows="3" name="description"></textarea>
            </div>
            <div class="form-group">
                <h5>Product Images</h5>
                <input type="file" class="form-control-file" name="images[]" multiple>
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
                        @for ($i = 0; $i < 5; $i++)
                            <tr>
                                <td><input type="text" class="form-control" name="paramName[]" placeholder="Name"></td>
                                <td><input type="text" class="form-control" name="paramValue[]" placeholder="Value"></td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-row mb-5">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Create Product</button>
                </div>
            </div>
        </form>
    </section>
@endsection

