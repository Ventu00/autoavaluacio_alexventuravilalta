<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <!-- Estilos Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40; /* Color de fondo oscuro */
            color: #ffffff; /* Color de texto claro */
        }
        .form-control {
            background-color: #495057; /* Color de fondo del campo de formulario */
            color: #ffffff; /* Color de texto del campo de formulario */
        }
        .btn-primary {
            background-color: #007bff; /* Color de fondo del botón primario */
            border-color: #007bff; /* Color del borde del botón primario */
        }
        .btn-secondary {
            background-color: #6c757d; /* Color de fondo del botón secundario */
            border-color: #6c757d; /* Color del borde del botón secundario */
        }
        .btn-primary, .btn-secondary {
            color: #ffffff; /* Color de texto de los botones */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Iniciar sesión</h2>
        <form action="{{ action([App\Http\Controllers\UsuarisController::class, 'login']) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="nom_usuari" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="contrasenya" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Aceptar</button>
                <a href="{{ url('/') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
    <!-- Scripts JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
