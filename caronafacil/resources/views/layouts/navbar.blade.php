<!-- resources/views/layouts/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ url('/') }}">CaronaFacil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @auth()
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('logout') }}">
                            Sair
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
