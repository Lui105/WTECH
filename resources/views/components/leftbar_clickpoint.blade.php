<div class="col-md-2">
    <h4>Categories</h4>
    <div class="list-group mb-3">
        @foreach($categories as $name)
            <a href="{{ route('products', ['category' => $name->id]) }}" class="list-group-item list-group-item-action">{{ $name->category_name }}</a>
        @endforeach

    </div>
    <div style="max-width: 200px;">
        @auth
            <h4>Last viewed</h4>
            @forelse($lastViewedProducts as $product)
                <a href="{{ route('product.update-last-viewed', $product->id) }}" style="text-decoration: none; color: black;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'" class="card">
                    <img src="{{ asset($product->image_url) }}" alt="Image of {{ $product->name }}">
                    <div class="card-body">
                        <h6 class="card-title">{{ $product->name }}</h6>
                        <p class="card-text">{{ $product->price }}€</p>
                    </div>
                </a>
            @empty
                <p>You have not viewed any products recently.</p>
            @endforelse
        @endauth
    </div>

</div>
