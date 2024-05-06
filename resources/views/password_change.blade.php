@extends('layouts.main')
@section('title', 'Clickpoint')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 mt-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">Reset Your Password</h4>
                        <p class="text text-center">Enter your email address and we'll send you a link to reset your password.</p>
                        <hr>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <div class="input-group">
                                    <input id="email" name="email" class="form-control" placeholder="Enter your email" type="email" required>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-primary">Send Reset Link</button>
                            </div>
                            <div class="text-center">
                                <a href="#" class="btn btn-link">Back to login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


