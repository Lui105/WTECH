@extends('layouts.main')
@section('title', 'Clickpointhsfgghgd')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 mt-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-2">Create New Password</h4>
                        <p class="text text-center">Your new password must be different from previously used passwords.</p>
                        <hr>
                        <form>
                            <div class="mb-3">
                                <label for="new-password" class="form-label">New Password</label>
                                <div class="input-group">
                                    <input id="new-password" name="new-password" class="form-control" placeholder="Enter new password" type="password" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <input id="confirm-password" name="confirm-password" class="form-control" placeholder="Confirm new password" type="password" required>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-primary">Set New Password</button>
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


