@extends('layouts.main')

@section('title', 'Clickpoint')

@section('content')
    <section class="container mt-4">
        <h2>Edit product</h2>
        <form action="{{ route('update', $product->id) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-group mt-4">
                <h5>Product Name</h5>
                <input type="text" class="form-control" placeholder="Enter product name" name="name" value="{{$product->name}}">
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
                                <input type="checkbox" name="categories[]" value="{{ $cat_name->id }}"
                                       @if(in_array($cat_name->id, $selectedCategoryIds)) checked @endif>
                                {{ $cat_name->category_name }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <small class="form-text text-muted">
                    Select multiple categories from the dropdown.
                </small>
            </div>
            <div class="form-group mt-4">
                <h5>Brand</h5>
                <input type="text" class="form-control" placeholder="Enter product brand" name="brand" value="{{ $product->brand }}">
            </div>
            <div class="form-group">
                <h5>Price</h5>
                <input type="number" class="form-control" placeholder="Enter price" name="price" value="{{ $product->price }}">
            </div>
            <div class="form-group">
                <h5>Description</h5>
                <textarea class="form-control" rows="3" name="description">{{ $product->description }}</textarea>
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
                        @foreach($product->parameters as $key => $value)
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="paramName[]" placeholder="Name"
                                           value="{{ $key }}">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="paramValue[]" placeholder="Value"
                                           value="{{ $value }}">
                                </td>
                            </tr>
                        @endforeach
                        @for ($i = $parameter_count; $i < 5; $i++)
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="paramName[]" placeholder="Name" value="">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="paramValue[]" placeholder="Value" value="">
                                </td>
                            </tr>
                        @endfor
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="form-group">
                <h5>Add Images</h5>
                <input type="file" class="form-control-file" name="images[]" multiple>
            </div>
            <ul id="file-list" class="list-unstyled" style="list-style-type: none;">
                @foreach($product->images as $image)
                    <li style="display: flex; align-items: center; margin-bottom: 10px;">
                        <img src="{{ asset('storage/images/' . $product->id . '/' . $image->image_name) }}" alt="Product Image" style="width: 100px; height: auto; margin-right: 10px;">
                        <form action="{{ route('delete_image',$image->id) }}" method="POST" style="margin-bottom: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            <div class="form-row mb-5">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Edit product</button>
                </div>
            </div>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>
@endsection

