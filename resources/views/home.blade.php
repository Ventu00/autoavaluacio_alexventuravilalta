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
        <button class="navbar-toggler text-bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-light"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                @if(Auth::check() && Auth::user()->tipus_usuaris->tipus == 'Administrador')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Master Data
                    </a>
                    <ul class="dropdown-menu">
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
                @if(Auth::check() && Auth::user()->tipus_usuaris->tipus == 'Professor')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Professors
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Assign Students</a></li>
                        <li><a class="dropdown-item" href="#">Learning Outcomes</a></li>
                        <li><a class="dropdown-item" href="#">Evaluation Criteria</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="{{ url('/profe') }}">Student Self-assessment</a></li>
                    </ul>
                </li>
                @endif
                @if(Auth::check() && Auth::user()->tipus_usuaris->tipus == 'Alumne')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Student
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/autoevaluacion') }}">Self-assessments</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
        <div class="navbar-text ms-auto text-light">
        {{ $user->nom }}
            </div>
    </div>
</nav>
<br>
<div class="container">
    <h1>Bienvenido, {{ $user->nom }}</h1>
        <!-- <h3 id="id">{{$user->id}}</h3> -->

    <p>¡Has iniciado sesión correctamente!</p>
</div>
</body>
</html>
<script>
    const userId = document.getElementById('id').textContent;
    localStorage.setItem('userId', userId);
</script>
<style>
        body {
            background-color: #121212;
            color: #ffffff;
        }
      
    </style>