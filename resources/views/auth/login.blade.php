<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <title>Login to Logic Note</title>
  </head>
  <body>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card login-form shadow">             
            <div class="card-body">
              <h2 class="card-title">Login</h2>
              <div class="d-grid mt-5 mb-4">
                <button type="submit" class="btn btn-light btn-gmail">
                    <img src="{{asset('img/google.png')}}" alt="Gmail" class="img-google me-2">
                    Sign up with Gmail
                </button>
             </div>

             <h6 class="card-subtitle text-muted mb-3 text-center">or login with Email</h6>

              <form>
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">Email*</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email...">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password*</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password...">
                </div>

                <div class="d-flex justify-content-between">
                    <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>

                    <div>
                        <a href="#" class="link text-primary">Forgot Password ?</a>
                    </div>
                </div>

                <div class="d-grid mt-5">
                    <button type="submit" class="btn btn-primary btn-login">Login</button>
                </div>
                <div class="mt-3">
                    <label>Don’t have an account?  <a href="/register" class="link text-primary">Create an account</a></label>
                </div>
              </form>
            </div>
          </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>