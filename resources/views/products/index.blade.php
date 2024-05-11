@extends('layouts.main')
@section('title', 'Clickpoint')

@section('content')
    <div class="col-md-10">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="d-flex justify-content-between align-items-center mb-3">

            @if(request()->has('search') || request()->has('max_price') || request()->has('asc') || request()->has('desc') || request()->has('color') || request()->has('brand'))
                <a href="{{ route('products') }}" class="btn btn-sm btn-outline-danger mr-2">&times;</a>
            @endif
            @if(request()->has('category'))
                    <h4>{{ $cat_name }}</h4>
                @else
                    <h4>{{ request("search", "Popular") }}</h4>
                @endif
            <div class="d-flex align-items-center">
                @if(Auth::user() && Auth::user()->isAdmin())
                    <h5 class="mr-3">Add product</h5>
                    <a href="{{ route('add_product_page') }}" class="btn-lg btn-primary mr-5">
                        <i class="bi bi-plus-lg"></i>
                    </a>
                @endif
                @include('components.filtering_clickpoint')
            </div>
        </div>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-2 mb-3">
                    <a href="{{ route('product.update-last-viewed', $product->id) }}" style="text-decoration: none; color: black;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'" class="card">
                        <img src="{{ asset($product->image_url) }}" alt="Image of {{ $product->name }}">

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }} €</p>
                            @if(Auth::user() && Auth::user()->isAdmin())
                                <button class="btn btn-danger btn-sm" type="button">
                                    <i class="bi bi-dash"></i>
                                </button>
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('pagination')
    @include('components.pagination_clickpoint')
@endsection
