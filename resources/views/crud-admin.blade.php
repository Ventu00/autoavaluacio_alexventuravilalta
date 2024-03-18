<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD de Usuarios</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1 class="mb-4">CRUD de Usuarios</h1>
    <!-- Formulario para añadir un nuevo usuario -->
    <form  action="{{ action([App\Http\Controllers\UsuarisController::class, 'store']) }}" method="POST" id="addUserForm" class="mb-4">
      <div class="form-group">@csrf
        <label for="username">Usuario:</label>
        <input type="text" class="form-control" id="username" required>
      </div>
      <div class="form-group">
        <label for="usertype">Tipo de Usuario:</label>
        <select class="form-control" id="usertype" required>
          <option value="estudiante">Estudiante</option>
          <option value="profesor">Profesor</option>
          <option value="administrador">Administrador</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Agregar Usuario</button>
    </form>

    <!-- Tabla para mostrar la lista de usuarios -->
    <table id="userTable" class="table">
      <thead>
        <tr>
          <th>Usuario</th>
          <th>Tipo de Usuario</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se llenará dinámicamente con datos -->
      </tbody>
    </table>
  </div>

  <!-- Scripts de Bootstrap y código JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Función para agregar un usuario
    function addUser() {
      const username = document.getElementById('username').value;
      const usertype = document.getElementById('usertype').value;
      // Aquí enviarías los datos al servidor para agregar el usuario
      // Por ahora, simplemente agregamos una nueva fila a la tabla
      const tableBody = document.getElementById('userTable').getElementsByTagName('tbody')[0];
      const newRow = tableBody.insertRow();
      newRow.innerHTML = `<td>${username}</td><td>${usertype}</td><td><button class="btn btn-info btn-sm" onclick="editUser(this)">Editar</button> <button class="btn btn-danger btn-sm" onclick="deleteUser(this)">Eliminar</button></td>`;
      document.getElementById('addUserForm').reset();
    }

    // Función para editar un usuario
    function editUser(button) {
      const row = button.closest('tr');
      const username = row.cells[0].innerText;
      const usertype = row.cells[1].innerText;
      const newUsername = prompt('Ingrese el nuevo nombre de usuario:', username);
      const newUsertype = prompt('Ingrese el nuevo tipo de usuario:', usertype);
      // Aquí enviarías los datos actualizados al servidor para editar el usuario
      // Por ahora, simplemente actualizamos la fila en la tabla
      row.cells[0].innerText = newUsername;
      row.cells[1].innerText = newUsertype;
    }

    // Función para eliminar un usuario
    function deleteUser(button) {
      const row = button.closest('tr');
      if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
        // Aquí enviarías la solicitud al servidor para eliminar el usuario
        // Por ahora, simplemente eliminamos la fila de la tabla
        row.remove();
      }
    }

    // Agregar evento de envío para el formulario de agregar usuario
    document.getElementById('addUserForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Evitar el envío por defecto del formulario
      addUser();
    });
  </script>
</body>
</html>
