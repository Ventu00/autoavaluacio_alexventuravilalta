<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">New User</h1>
        <div class="card mt-4">
            <div class="card-header">Crear Usuario</div>
            <div class="card-body">
                <form action="{{ action([App\Http\Controllers\UsuarisController::class, 'store']) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="nombreUsuario" name="nom_usuari" value="{{ old('nom_usuari') }}">
                    </div>
                    <div class="mb-3">
                        <label for="contrasenya" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="contrasenya" name="contrasenya" value="{{ old('contrasenya') }}">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correu" value="{{ old('correu') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nom" value="{{ old('nom') }}">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="cognom" value="{{ old('cognom') }}">
                    </div>
                    <div class="mb-3">
                        <label for="activo" class="form-label">Activo</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="activo" name="activo" value="1" {{ old('activo') ? 'checked' : '' }}>
                            <label class="form-check-label" for="activo">Sí</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tipoUsuario" class="form-label">Tipo de Usuario</label>
                        <select class="form-select" id="tipoUsuario" name="tipus_usuaris_id">
                            <option value="1" {{ old('tipus_usuaris_id') == 1 ? 'selected' : '' }}>Tipo 1</option>
                            <option value="2" {{ old('tipus_usuaris_id') == 2 ? 'selected' : '' }}>Tipo 2</option>
                            <option value="3" {{ old('tipus_usuaris_id') == 3 ? 'selected' : '' }}>Tipo 3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <a href="{{ url('usuari') }}" class="btn btn-danger">Salir</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<style>
        body {
            background-color: #121212;
            color: #e0e0e0;
        }
        .card {
            background-color: #1e1e1e;
            border-color: #2c2c2c;
        }
        .card-header {
            background-color: #2c2c2c;
            border-bottom: 1px solid #3a3a3a;
        }
        .form-control, .form-select {
            background-color: #2c2c2c;
            color: #e0e0e0;
            border-color: #3a3a3a;
        }
        .form-control:focus, .form-select:focus {
            background-color: #2c2c2c;
            color: #e0e0e0;
            border-color: #555;
            box-shadow: none;
        }
        .form-check-input {
            background-color: #2c2c2c;
            border-color: #3a3a3a;
        }
        .btn-primary, .btn-danger {
            background-color: #343a40;
            border-color: #454d55;
        }
        .btn-primary:hover, .btn-danger:hover {
            background-color: #495057;
            border-color: #5a6268;
        }
    </style>