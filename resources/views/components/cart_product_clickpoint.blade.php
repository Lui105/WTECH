<div class="card mb-3">
    <div class="card-body">
        <div class="row align-items-center">
            <!-- Image -->
            <div class="col-auto">
                <img src="{{ $item->image_url }}" class="img-fluid" alt="{{ $item->name }}" style="width: 100px;">
            </div>

            <!-- Product Name -->
            <div class="col-md-3">
                <h5 class="mb-0">{{ $item->name }}</h5>
            </div>

            <!-- Quantity form -->
            <div class="col-md">
                <form action="{{ route('cart.update', ['productId' => $item->id]) }}" method="POST" class="d-flex align-items-center">
                    @csrf
                    <input type="number" name="quantity" class="form-control form-control-sm me-2" value="{{ $item->pivot->quantity }}" min="1" style="width: 80px;">
                    <button type="submit" class="btn btn-info btn-sm">Update</button>
                </form>
            </div>

            <!-- Delete form -->
            <div class="col-md-auto">
                <form action="{{ route('cart.delete', $item->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                </form>
            </div>

            <!-- Total Price -->
            <div class="col-md-auto">
                <p class="card-text">{{ number_format($item->price * $item->pivot->quantity, 2) }} €</p>
            </div>
        </div>
    </div>
</div>
