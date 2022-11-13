<nav class="navbar navbar-epw navbar-expand-lg bg-transparent">
    <div class="container-fluid">
        <img src="{{ asset('img/Logo EPW.png') }}" width="60" alt="">
        <a class="navbar-brand ms-4" href="#">EPW 2023</a>
        <button type="button" class="btn btn-primary bg-transparent border-0" id="button-modal" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <i class="bi bi-list fs-3"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-epw" id="nav-link-epw" href="#">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-epw" id="nav-link-epw" href="#">LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">EPW 2023</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <a href="#" class="d-block text-decoration-none my-2 link-modal">Home</a>
                    <a href="#" class="d-block text-decoration-none my-2 link-modal">About</a>
                    <a href="#" class="d-block text-decoration-none my-2 link-modal">EPC</a>
                    <a href="#" class="d-block text-decoration-none my-2 link-modal">INJECTION</a>
                    <a href="#" class="d-block text-decoration-none my-2 link-modal">Merch</a>
                </div>
            </div>
        </div>
    </div>
</nav>
