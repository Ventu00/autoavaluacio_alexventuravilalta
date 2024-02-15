<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/jpg" href="images/logo.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoevaluation-AlexVentura</title>
    @vite(['resources/css/app.css','resources/css/app.scss', 'resources/js/app.js'])
</head>
<body style="background-color: #060606;">

<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <!-- Main data menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Master Data
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">User Types</a></li>
                        <li><a class="dropdown-item" href="#">Users</a></li>
                        <li><a class="dropdown-item" href="#">Cycles</a></li>
                        <li><a class="dropdown-item" href="#">Modules</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="#">Assign Professors</a></li>
                        <li><a class="dropdown-item" href="#">Assign Students</a></li>
                        <li><a class="dropdown-item" href="#">Learning Outcomes</a></li>
                        <li><a class="dropdown-item" href="#">Evaluation Criteria</a></li>
                    </ul>
                </li>

                <!-- Professors menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Professors
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Assign Students</a></li>
                        <li><a class="dropdown-item" href="#">Learning Outcomes</a></li>
                        <li><a class="dropdown-item" href="#">Evaluation Criteria</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="#">Student Self-assessment</a></li>
                    </ul>
                </li>

                <!-- Students menu -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Students</a>
                </li>
            </ul>
        </div>

        <!-- Right-aligned text with your name -->
        <div class="navbar-text ms-auto">
        Àlex
        </div>
    </div>
</nav>

<!-- Your content section goes here -->

</body>
</html>
