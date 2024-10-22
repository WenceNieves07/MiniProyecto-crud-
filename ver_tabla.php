<?php
session_start(); // Inicia la sesión al comienzo

// Verificar si se hizo clic en el botón de "Salir"
if (isset($_POST['logout'])) {
    session_destroy(); // Destruye la sesión
    header("Location: index.php"); // Redirige a index.php
    exit(); // Asegurar que el código se detenga aquí
}

// Verificar si la sesión 'registrado' no está establecida, lo que significa que el usuario no ha llenado el formulario
if (!isset($_SESSION['registrado']) || $_SESSION['registrado'] !== true) {
    // Redirigir al usuario a la página de inicio con un mensaje de advertencia
    echo '
        <script>
            alert("Primero debes llenar el formulario para poder ver la tabla.");
            window.location = "index.php"; // Redirige a index.php
        </script>
    ';
    exit(); // Detener la ejecución del script
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Registrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="d-flex flex-wrap justify-content-center">
        <!-- Agregar el botón de salir -->
        <div class="text-center mt-5">
            <form method="POST">
                <button type="submit" name="logout" class="btn btn-primary">Salir</button>
            </form>
        </div>
        <div class="spacer"></div>
        <div class="table-container">
            <h3 class="text-center">Datos Registrados</h3>
            <div class="text-center mt-3">
                <button id="toggleTabla" class="btn btn-primary">Mostrar/Ocultar Tabla</button>
            </div>
            
            <table id="tabla" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Completo</th>
                        <th>Dirección</th>
                        <th>Observación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Incluir el archivo de conexión a la base de datos
                    include 'conexion.php';

                    // Definir la consulta SQL para seleccionar los datos de la tabla
                    $sql = "SELECT id, nombre_completo, direccion, observacion FROM tabla";

                    // Ejecutar la consulta en la base de datos y almacenar el resultado en la variable $result
                    $result = $conn->query($sql);

                    // Verificar si el número de filas del resultado es mayor a 0, lo que significa que hay datos
                    if ($result->num_rows > 0) {
                        // Recorrer cada fila del resultado usando un bucle while
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["nombre_completo"] . "</td>
                                    <td>" . $row["direccion"] . "</td>
                                    <td>" . $row["observacion"] . "</td>
                                    <td>
                                        <a href='editar.php?id=" . $row['id'] . "' class='btn btn-warning'>Editar</a>
                                        <a href='eliminar.php?id=" . $row['id'] . "' class='btn btn-danger' onclick=\"return confirm('¿Estás seguro de que deseas eliminar este registro?');\">Eliminar</a>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>No hay datos registrados</td></tr>";
                    }

                    // Cerrar la conexión con la base de datos una vez que se haya completado el procesamiento
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>               
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="java.js"></script>
</body>
</html>
