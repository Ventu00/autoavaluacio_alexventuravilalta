<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <!-- Incluir estilos CSS si es necesario -->
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
    <!-- Incluir scripts JS si es necesario -->
</body>
</html>
