@extends('auth.layout.index')
@section('title', 'Register')

@section('main')
    <div class="container d-flex align-items-center justify-content-center">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('LoginFailed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('LoginFailed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card login-form shadow">
            <div class="card-body">
                <h2 class="card-title">Login</h2>
                <div class="d-grid mt-5 mb-4">
                    <button type="submit" class="btn btn-light btn-gmail">
                        <img src="{{ asset('img/google.png') }}" alt="Gmail" class="img-google me-2">
                        Sign up with Gmail
                    </button>
                </div>

                <h6 class="card-subtitle text-muted mb-3 text-center">or login with Email</h6>

                <form acton="/login" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror
                            id="email" placeholder="Enter Your Email..." autofocus required value={{ old('email') }}>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password*</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter Your Password...">
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
                        <label>Don’t have an account? <a href="/register" class="link text-primary">Create an
                                account</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('auth.layout.footer')
@endsection
