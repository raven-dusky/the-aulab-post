<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img src="{{ Storage::url('images/logo.png') }}" alt="Logo" width="92" height="70" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center w-100">
                <li>
                    <a class="nav-link" href="{{ route('article.index') }}">Tutti gli articoli</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.create') }}">Inserisci un articolo</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('careers') }}">Lavora con noi</a>
                </li>
                <form action="{{ route('article.search') }}" method="GET" class="d-flex mx-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cerca tra gli articoli..." aria-label="Search" name="query">
                    <button class="btn primary-btn" type="submit">Cerca</button>
                </form>
                @auth
                <li class="nav-item ms-auto p-1 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ciao, {{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                        @if(Auth::user()->is_admin)
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Amministrazione</a>
                        </li>
                        @endif
                        @if(Auth::user()->is_revisor)
                        <li>
                            <a class="dropdown-item" href="{{ route('revisor.dashboard') }}">Revisioni</a>
                        </li>
                        @endif
                        @if(Auth::user()->is_writer)
                        <li>
                            <a class="dropdown-item" href="{{ route('writer.dashboard') }}">Workspace</a>
                        </li>
                        @endif
                        <li>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                        </li>
                        <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                        @csrf
                        </form>
                    </ul>
                </li>
                @endauth
                @guest
                <li class="nav-item nav-border ms-auto p-1">
                    <a class="nav-link fw-bold text-uppercase" href="{{ route('register') }}">Registrati</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
