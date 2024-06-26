@extends('layouts.main')
@section('title', 'Clickpointhsfgghgd')

@section('content')
    <div class="col-md-10">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Popular</h4>
            <div class="d-flex align-items-center">
                <h5 class="mr-3">Add product</h5>
                <button class="btn-lg btn-primary mr-5">
                    <i class="bi bi-plus-lg"></i>
                </button>
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
                            <button class="btn btn-danger btn-sm" type="button">
                                <i class="bi bi-dash"></i>
                            </button>
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

