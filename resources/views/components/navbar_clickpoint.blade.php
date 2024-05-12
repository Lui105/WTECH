<style>
    .nav-link {
        display: flex;
        align-items: center;
        height: 100%;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('dashboard') }}">ClickPoint</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
            </li>
        </ul>
        <div class="navbar-nav ml-auto align-items-center">
            <a href="{{route('cart')}}" class="nav-item nav-link p-2">
                <i class="bi bi-cart" style="font-size: 30px;"></i>
            </a>
            <a href="{{ route('login') }}" class="nav-item nav-link p-2">
                <i class="bi bi-person" style="font-size: 30px;"></i>
            </a>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;" class="nav-item nav-link p-2 m-0">
                @csrf
                <button type="submit" style="background: none; border: none; padding: 0;">
                    <i class="bi bi-box-arrow-right" style="font-size: 30px;"></i>
                </button>
            </form>
            <form class="form-inline nav-item nav-link" action="{{ route('products') }}" method="GET" style="margin-bottom: 0;">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
