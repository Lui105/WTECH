@extends('layouts.auth')
@section('title', 'Clickpoint')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 mt-5">
                <!-- Card for Login Form -->
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">ClickPoint</h4>
                        <p class="text text-center">Log into your account</p>
                        <hr>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <input id="email" name="email" class="form-control" placeholder="Enter email" type="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input id="password" name="password" class="form-control" placeholder="Enter password" type="password" required>
                                </div>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                            <div class="text-center mt-2">
                                <a href="{{ route('register') }}" class="btn btn-link">Create new account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


