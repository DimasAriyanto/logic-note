@extends('auth.layout.index')
@section('title', 'Register')

@section('main')
    <div class="container">
        <div class="card register-form shadow">
            <div class="card-body py-5">
                <h5 class="card-title fw-bold">Register</h5>
                <form action="/register" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Full Name</label>
                        <input type="name" name="name " class="form-control @error('name') is-invalid @enderror"
                            placeholder="Full Name" id="name" value="{{ old('name') }}">
                        @error('name')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password"> Create Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password">
                        @error('password')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="phone">Phone Number</label>
                        <input type="number" name="phone"
                            class="form-control rounded-pill @error('phone') is-invalid @enderror" id="phone"
                            placeholder="Phone Number">
                        @error('phone')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-grid mt-5">
                        <button type="submit" class="btn btn-primary btn-submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('auth.layout.footer')
@endsection
