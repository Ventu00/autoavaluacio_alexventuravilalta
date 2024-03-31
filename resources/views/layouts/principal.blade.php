<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuarios</title>
    <!-- Enlaces a los archivos CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">CRUD de Usuarios</h1>
        
        <!-- Formulario para crear usuario -->
        <div class="card mt-4">
            <div class="card-header">Crear Usuario</div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="nombreUsuario">
                    </div>
                    <div class="mb-3">
                        <label for="contrasenya" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="contrasenya">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="activo" class="form-label">Activo</label>
                        <select class="form-select" id="activo">
                            <option value="1" selected>Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tipoUsuario" class="form-label">Tipo de Usuario</label>
                        <select class="form-select" id="tipoUsuario">
                            <option value="1">Tipo 1</option>
                            <option value="2">Tipo 2</option>
                            <option value="3">Tipo 3</option>
                            <!-- Agrega aquí más opciones si es necesario -->
                        </select>
                    </div>
                    <a href="{{ url('usuari/create') }}" type="submit" class="btn btn-primary">Crear</a>
                    <a href="{{ url('usuari') }}" type="submit" class="btn btn-primary">Usuarios</a>

                </form>
            </div>
        </div>
        
        <!-- Lista de Usuarios -->
        <div class="card mt-4">
            <div class="card-header">Lista de Usuarios</div>
            <div class="card-body">
                <table class="table">
                    @yield('contenido')
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre de Usuario</th>
                            <th>Correo</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Activo</th>
                            <th>Tipo de Usuario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>usuario1</td>
                            <td>usuario1@example.com</td>
                            <td>Juan</td>
                            <td>Pérez</td>
                            <td>Si</td>
                            <td>Tipo 1</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>usuario2</td>
                            <td>usuario2@example.com</td>
                            <td>María</td>
                            <td>López</td>
                            <td>No</td>
                            <td>Tipo 2</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <!-- Aquí se mostrarían los demás usuarios -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y cualquier otro script necesario -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
