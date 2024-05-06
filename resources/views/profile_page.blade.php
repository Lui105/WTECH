@extends('layouts.main')

@section('title', 'Clickpoint')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="text-center content border px-3" style="background-color: #f8f9fa;">
                    <i class="bi bi-person-circle icon" style="font-size: 60px;"></i>
                    <h2 class="mt-3">User Settings</h2>
                    <!-- Change Username -->
                    <div class="mt-4">
                        <h4>Change Username</h4>
                        <input type="text" class="form-control" placeholder="New Username">
                    </div>
                    <div class="my-4">
                        <button class="btn btn-primary">Update Username</button>
                    </div>

                    <!-- Change Password -->
                    <div class="my-4">
                        <h4>Change Password</h4>
                        <button class="btn btn-primary mt-3">Change password</button>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

