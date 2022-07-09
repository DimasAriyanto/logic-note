@extends('ui.layout.index')
@section('title', 'Dashboard')

@section('header')
    @include('ui.layout.navbar')
@endsection

@section('main')
    <div class="d-flex flex-column justify-content-center align-items-center task-section">
        <div class="w-50 shadow">
            <div class="container px-5 pt-5">
                <div class="today mb-3">
                    <h6 class="mb-3">Today</h6>
                    <div class="task-list">
                        <!-- list child -->
                        <div class="row mb-1 task-list-child rounded">
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-circle"></i>
                                </button>
                            </div>
                            <div class="col-md-10 px-1">
                                <span>lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- list child -->
                        <!-- list child -->
                        <div class="row mb-1 task-list-child rounded">
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-circle"></i>
                                </button>
                            </div>
                            <div class="col-md-10 px-1">
                                <span>lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- list child -->
                        <!-- list child -->
                        <div class="row mb-1 task-list-child rounded">
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-circle"></i>
                                </button>
                            </div>
                            <div class="col-md-10 px-1">
                                <span>lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- list child -->
                        <!-- list child -->
                        <div class="row mb-1 task-list-child rounded">
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-circle"></i>
                                </button>
                            </div>
                            <div class="col-md-10 px-1">
                                <span>lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- list child -->
                        <!-- list child -->
                        <div class="row mb-1 task-list-child rounded">
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-circle"></i>
                                </button>
                            </div>
                            <div class="col-md-10 px-1">
                                <span>lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- list child -->
                        <div class="row mb-1 task-list-child rounded">
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-check-circle-fill text-success"></i>
                                </button>
                            </div>
                            <div class="col-md-10 px-1">
                                <span class="text-decoration-line-through text-muted">lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-trash-fill text-secondary"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tomorrow mb-3">
                    <h6 class="mb-3">Tomorrow</h6>
                    <div class="task-list">
                        <!-- list child -->
                        <div class="row mb-1 task-list-child rounded">
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-circle"></i>
                                </button>
                            </div>
                            <div class="col-md-10 px-1">
                                <span>lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- list child -->
                        <div class="row mb-1 task-list-child rounded">
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-check-circle-fill text-success"></i>
                                </button>
                            </div>
                            <div class="col-md-10 px-1">
                                <span class="text-decoration-line-through text-muted">lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-trash-fill text-secondary"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="someday mb-3">
                    <h6 class="mb-3">Someday</h6>
                    <div class="task-list">
                        <!-- list child -->
                        <div class="row mb-1 task-list-child rounded">
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-circle"></i>
                                </button>
                            </div>
                            <div class="col-md-10 px-1">
                                <span>lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- list child -->
                        <div class="row mb-1 task-list-child rounded">
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-check-circle-fill text-success"></i>
                                </button>
                            </div>
                            <div class="col-md-10 px-1">
                                <span class="text-decoration-line-through text-muted">lorem ipsum dolor sit amet.</span>
                            </div>
                            <div class="col-md-1 d-flex justify-content-center allign-items-center">
                                <button class="bg-transparent border-0">
                                    <i class="bi bi-trash-fill text-secondary"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adding-task-section w-100 py-3 shadow-lg px-5">
                <form class="d-flex w-100" action="#">
                    <div class="w-100">
                        <input type="text" class="form-control rounded-pill px-3"
                            placeholder="click to quickly adding task">
                    </div>
                    <button type="submit" class="btn ms-1 rounded-pill btn-primary">
                        <!-- <i class="bi bi-plus"></i> -->
                        Add
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('ui.layout.footer')
@endsection
