<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

    <title>Register Logic Note</title>
</head>

<body>
    <div class="container">
        <div class="card register-form shadow">
            <div class="card-body py-5">
                <h5 class="card-title fw-bold">Register</h5>
                <form action="/register" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Your Email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Create Password</label>
                        <input type="text" class="form-control" placeholder="Create Password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control rounded-pill" placeholder="Phone Number">
                    </div>
                    <div class="d-grid mt-5">
                        <button type="submit" class="btn btn-primary btn-submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
