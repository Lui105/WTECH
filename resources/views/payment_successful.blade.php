<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClickPoint</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .success-icon {
            color: #28a745;
            font-size: 4rem;
        }
        .success-message {
            font-size: 1.25rem;
        }
        .success-container {
            padding: 3rem !important;
        }
        .btn-back-homepage {
            padding: .75rem 1.25rem;
            font-size: 1.25rem;
        }
    </style>

</head>
<body>

<header>
    @include('components.navbar_clickpoint')
</header>

<section>
    <div class="container-fluid mt-4">
        <!-- Category and Product List -->
        <main>
            <div class="row">
                <!-- Category List -->
                @include('components.leftbar_clickpoint')
                <!-- Main Content -->
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="text-center success-container border" style="background-color: #f8f9fa;">
                                <i class="bi bi-check-circle success-icon"></i>
                                <h2 class="mt-3">Payment successful</h2>
                                <p class="success-message">Your order number is 1234 5678</p>
                                <p class="success-message">A receipt has been sent to the email address john.doe@gmail.com</p>
                                <a href="/" class="btn btn-primary btn-back-homepage">Back to homepage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
