@extends('layouts.main')
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
                        <form>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <input id="username" name="username" class="form-control" placeholder="Enter username" type="text" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input id="password" name="password" class="form-control" placeholder="Enter password" type="password" required>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-link">Forgot password?</a>
                            </div>
                            <div class="text-center mt-2">
                                <a href="#" class="btn btn-link">Create new account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



