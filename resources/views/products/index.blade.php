@extends('layouts.main')
@section('title', 'Clickpoint')

@section('content')
    <div class="col-md-10">
        <div class="d-flex justify-content-between align-items-center mb-3">
            @if(request()->has('search') || request()->has('max_price') || request()->has('asc') || request()->has('desc') || request()->has('color') || request()->has('brand'))
                <a href="{{ route('products') }}" class="btn btn-sm btn-outline-danger mr-2">&times;</a>
            @endif
            <h4>{{ request("search", "Popular") !== "Popular" ? '"' . request("search") . '"' : request("search", "Popular") }}</h4>
            <div class="d-flex align-items-center">
                @include('components.filtering_clickpoint')
            </div>
        </div>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-2 mb-3">
                    <a href="{{ route('products.show', $product->id) }}" style="text-decoration: none; color: black;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'" class="card">
                        <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }} €</p>
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
