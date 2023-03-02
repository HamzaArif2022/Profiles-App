<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Network |</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Details">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create.profile') }}">AjouterProfile</a>
                </li>
                @auth
                    {{-- if user is coonecter on affiche la Desconnexion --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Logout') }}">Deconnecter</a>
                    </li>

                @endauth
                @guest
                    {{--   if user is not  coonecter on  affiche la connexion --}}
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('Login') }}">Se connecter</a>
                    </li>

                @endguest

            </ul>
            @auth

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hello {{ auth()->user()->name }} {{-- pour acceder a la valeur de user authentificateur --}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</nav>
