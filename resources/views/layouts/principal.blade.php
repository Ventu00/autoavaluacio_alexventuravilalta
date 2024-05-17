<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Users Crud</h1>
        <div class="card mt-4">
            <div class="card-header">Users List</div>
            <div class="card-body">
                @yield('contenido')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<style>
        body {
            background-color: #121212;
            color: #e0e0e0;
        }
        .card {
            background-color: #212529;
            border-color: #2c2c2c;
        }
        .card-header {
            background-color: #2c2c2c;
            border-bottom: 1px solid #3a3a3a;
        }
      
    </style>