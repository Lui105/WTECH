@extends('layouts.main')

@section('title', 'Clickpoint')

@section('content')
    <div class="col-md-10">
        <div class="row">
            <!-- Main Product Image -->
            <div class="col-lg-5">
                @if($product->images->isNotEmpty())
                    <img src="{{ asset('storage/images/' . $product->id . '/' . $product->images->first()->image_name) }}" alt="{{ $product->name }}" class="img-fluid" style="max-height: 600px;">
                @else
                    <img src="{{ asset("storage/images/default.png") }}" alt="Default Product Image" class="img-fluid" style="max-height: 600px;">
                @endif
                <h5 class="mt-4">Gallery</h5>
                <div class="row">
                    @if($product->images->isNotEmpty())
                        @foreach($product->images as $image)
                            <div class="col-3 mb-3">
                                <img src="{{ asset('storage/images/' . $product->id . '/' . $image->image_name) }}" alt="{{ $product->name }}" class="img-fluid" onclick="changeImage('{{ asset('storage/images/' . $product->id . '/' . $image->image_name) }}');">
                            </div>
                        @endforeach
                    @else
                        <div class="col-3 mb-3">
                            <img src="{{ asset('storage/images/default.png') }}" alt="Default Image" class="img-fluid" >
                        </div>
                    @endif


                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-6">
                <h2>{{ $product->name }}</h2>
                <p class="{{ $product->status == 'Out of stock' ? 'text-danger' : 'text-success' }}">
                    {{ $product->status }}
                </p>
                <h3>{{ $product->price }} €</h3>
                <div class="d-flex align-items-center mb-3">
                    <form action="{{ route('add_to_cart') }}" method="POST">
                        @csrf
                        @if(Auth::user() && Auth::user()->isAdmin())
                            <button type="button" class="btn btn-primary ml-3">
                                <i class="bi bi-pencil-square"></i> Edit product
                            </button>

                        @elseif ($product->status != 'Out of stock')
                        <div class="d-flex align-items-center">
                            <input type="number" name="quantity" class="form-control ml-2" value="1" min="1" aria-label="Quantity" style="width: 60px;">
                            <input type="hidden" name="productId" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-success ml-3">
                                    <i class="bi bi-cart"></i> Add to Cart
                                </button>
                        </div>
                        @endif
                    </form>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <h4>Description</h4>
                <p>{{ $product->description }}</p>

                <h4>Parameters</h4>
                <table class="table">
                    @if(is_array($product->parameters) && !empty($product->parameters))
                        @foreach($product->parameters as $key => $value)
                            <tr>
                                <th>{{ $key }}</th>
                                <td>{{ $value }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">No additional parameters available.</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection

<script>
    function changeImage(src) {
        const mainImage = document.querySelector('.col-lg-5 img.img-fluid');
        mainImage.src = src;
    }
</script>

