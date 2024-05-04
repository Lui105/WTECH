<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClickPoint - Create New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<header>
    @include('components.navbar_clickpoint')
</header>

<!-- Main content -->
<section>
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
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
