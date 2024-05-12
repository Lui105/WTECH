@extends('layouts.auth')
@section('title', 'Clickpoint')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 mt-5">
                <!-- Card for Registration Form -->
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">ClickPoint</h4>
                        <p class="text text-center">Create your account</p>
                        <hr>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input id="first_name" name="first_name" class="form-control" placeholder="Enter first name" type="text" required>
                                @error('first_name')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input id="last_name" name="last_name" class="form-control" placeholder="Enter last name" type="text" required>
                                @error('last_name')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" class="form-control" placeholder="Enter email" type="email" required>
                                @error('email')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input id="phone_number" name="phone_number" class="form-control" placeholder="Enter phone number" type="tel">
                                @error('phone')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" name="password" class="form-control" placeholder="Create a password" type="password" required>
                                @error('password')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm password" type="password" required>
                                @error('password_confirmation')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="btn btn-link">Already have an account? Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


