    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container py-2">
            <div class="d-flex">
                <p class="d-flex justify-content-center align-items-center mb-0">Good Morning, </p>
                <a class="navbar-brand fw-bold ms-1 me-0" href="#">{{ auth()->user()->name }}</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex justify-content-center align-items-center"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <!-- <i class="bi bi-three-dots"></i> -->
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-left me-1"></i> Logout</button>
                                </form>
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
