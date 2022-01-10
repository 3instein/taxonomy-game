<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3" style="height: 100vh">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-decoration-none fw-bold fs-5 {{ request()->is('admin') ? '' : 'text-dark' }}" aria-current="page" href="{{ route('admin.index') }}">
                    <span data-feather="home"></span>
                    Dasbor
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-decoration-none fw-bold fs-5 text-dark" href="{{ route('quiz.index') }}">
                    <span data-feather="file"></span>
                    Pertanyaan
                </a>
            </li>
        </ul>
    </div>
</nav>
