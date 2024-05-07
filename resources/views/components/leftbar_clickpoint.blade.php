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
        @forelse($lastViewedProducts as $product)
        <a href="{{ route('product.update-last-viewed', $product->id) }}" style="text-decoration: none; color: black;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'" class="card">
            <img src="{{ $product->image_url ? asset($product->image_url) : asset('images/default.jpg') }}" alt="Image of {{ $product->name }}">
            <div class="card-body">
                <h6 class="card-title">{{ $product->name }}</h6>
                <p class="card-text">{{ $product->price }}€</p>
            </div>
        </a>
        @empty
            <p>You have not viewed any products recently.</p>
        @endforelse
    </div>

</div>
