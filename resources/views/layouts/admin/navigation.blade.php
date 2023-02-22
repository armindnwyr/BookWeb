<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">Book<span class="dot">Web</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if (Route::has('login'))
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand" href="#">
                </a>
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/','biblioteca*') ? 'active' : '' }}"
                            href="/">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('informe*') ? 'active' : '' }}" href="{{ route('binforme.index') }}"
                            >Informe de Practicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://repositorio.unap.edu.pe/" target="_blink">Repositorio de
                            Tesis</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}"
                                target="_blink">Login</a>
                        </li>
                    @endauth

                </ul>
            </div>
        @endif
    </div>
</nav>