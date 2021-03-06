@extends('ui.layout.index')
@section('title', 'Home')

@section('header')
    @include('ui.layout.navbar')
@endsection

@section('main')
    <!-- hero -->
    <div class="w-100 hero mt-3">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-6">
                    <h1 class="fw-bold">Your <span class="text-primary">busy</span> life deserve this.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolore totam mollitia, placeat
                        aliquam dolorum amet.</p>
                    <div class="mt-4">
                        <a href="/register">
                            <button class="btn btn-primary rounded-pill shadow">Get started - it's Free</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- section 2 -->
    <div class="w-100 section2">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <div class="w-75">
                        <span class="fw-light text-secondary">SIMPLE</span>
                        <h1 class="fw-bold">the best way to organize your life</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolore totam mollitia,
                            placeat aliquam dolorum amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section 2 -->

    <!-- section 3 -->
    <div class="w-100 section2">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-5">
                    <span class="fw-light text-secondary">Easy</span>
                    <h1 class="fw-bold">Integrated with Whatsapp</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolore totam mollitia, placeat
                        aliquam dolorum amet.</p>
                </div>
                <div class="col-md-7"></div>
            </div>
        </div>
    </div>
    <!-- end section 3 -->

    <!-- reg yuk -->
    <div class="w-100 reg-yuk">
        <div class="container h-100">
            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                <h1>Let's get started</h1>
                <p class="mb-5">From now on, Everything is free </p>
                <a href="/register">
                    <button class="btn btn-primary rounded-pill">Register now!</button>
                </a>
            </div>
        </div>
    </div>
    <!-- end reg yuk -->
@endsection

@section('footer')
    <div class="w-100 footer">
        <div class="container h-100">
            <h3 class="mt-5">Logic-note</h3>
        </div>
    </div>
    @include('ui.layout.footer')
@endsection
