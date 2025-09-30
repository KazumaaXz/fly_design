<header class="bg-white shadow py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo or Brand Name -->
        <div class="fs-4 fw-bold text-primary"><i class="fa-brands fa-fly me-3"></i>FlyDesign</div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item me-3">
                            <a class="nav-link text-dark" href="./index.html">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-dark" href="./about.html">About</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-dark" href="./materi.html">Materi</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link @yield('articlesActive')"
                                href="{{ route('home.articles.index') }}">{{ __('Blog') }}</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link @yield('informationActive')"
                                href="{{ route('home.information.index') }}">{{ __('Informasi') }}</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-dark" href="./pengajar.html">Pengajar</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link @yield('contactActive')"
                                href="{{ route('home.contact.index') }}">{{ __('Kontak') }}</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link fw-bold text-primary"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle fw-bold text-primary" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                        {{ __('Dashboard') }}
                                    </a>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
