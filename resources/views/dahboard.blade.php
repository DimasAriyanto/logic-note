<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Logic-note</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container py-2">
            <div class="d-flex">
                <p class="d-flex justify-content-center align-items-center mb-0">Good Morning, </p>
                <a class="navbar-brand fw-bold ms-1 me-0" href="#">Dhaniar Febrin</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex justify-content-center align-items-center" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <!-- <i class="bi bi-three-dots"></i> -->
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                                <a class="dropdown-item text-danger" href="#">
                                    <i class="bi bi-box-arrow-left me-1"></i> Logout
                                </a>
                            </li>
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                </ul>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h5 class="lh-1 mb-1">Monday</h5>
                    <p class="lh-1 mb-0 text-secondary">13 Dec 2002</p>
                </div>
            </div>
        </div>
    </nav>

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



    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
