<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css','resources/css/app.scss', 'resources/js/app.js'])

</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png" alt="Logo"></a>
        <button class="navbar-toggler text-bg-light " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-light"></span>
        </button>
        <div class="collapse navbar-collapse text-light" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <!-- Main data menu -->
                @if(Auth::check() && Auth::user()->tipus_usuaris->tipus == 'Administrador')

                <li class="nav-item dropdown text-light">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Master Data
                    </a>
                    <ul class="dropdown-menu bg-body-emphasis text-light">
                        <li><a class="dropdown-item" href="#">User Types</a></li>
                        <li><a class="dropdown-item" href="{{ url('usuari') }}">Users</a></li>
                        <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a></li>
                        <li><a class="dropdown-item" href="#">Cycles</a></li>
                        <li><a class="dropdown-item" href="#">Modules</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="#">Assign Professors</a></li>
                        <li><a class="dropdown-item" href="#">Assign Students</a></li>
                        <li><a class="dropdown-item" href="#">Learning Outcomes</a></li>
                        <li><a class="dropdown-item" href="#">Evaluation Criteria</a></li>
                    </ul>
                </li>
                @endif

                <!-- Professors menu -->
                @if(Auth::check() && Auth::user()->tipus_usuaris->tipus == 'Professor')
                <li class="nav-item dropdown text-light bg-body-emphasis">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Professors
                    </a>
                    <ul class="dropdown-menu text-light bg-body-emphasis">
                        <li><a class="dropdown-item" href="#">Assign Students</a></li>
                        <li><a class="dropdown-item" href="#">Learning Outcomes</a></li>
                        <li><a class="dropdown-item" href="#">Evaluation Criteria</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="#">Student Self-assessment</a></li>
                    </ul>
                </li>
                @endif

                <!-- Students menu -->
                @if(Auth::check() && Auth::user()->tipus_usuaris->tipus == 'Alumne')
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Students</a>
                </li>
                @endif
            </ul>
        </div>

        <div class="navbar-text ms-auto text-light">
        Àlex
        </div>
    </div>
</nav>
    <br>
    <h1>Bienvenido, {{ $user->nom }}</h1>
    <p>¡Has iniciado sesión correctamente!</p>
</body>
</html>
