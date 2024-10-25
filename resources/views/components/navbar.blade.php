<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Digs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('homepage') }}" class="nav-link" aria-current="page">Home</a"></a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Ciao, {{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu">
                                <li><a href="" class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">Logout</a></li>
                                <form action="{{ route('logout') }}" method="post" id="form-logout" class="d-none"></form>
                                {{-- <li><a href="" class="dropdown-item">another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="dropdown-item">something else here</li> --}}
                            </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto!
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('login') }}" class="dropdown-item"></a>Accedi</li>
                            <li><a href="{{ route('register') }}" class="dropdown-item"></a>Registrati</li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
