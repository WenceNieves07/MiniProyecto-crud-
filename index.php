<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    
    <!-- Vincular el archivo CSS externo -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div class="container mt-5">
        <div class="d-flex flex-wrap justify-content-center">
            <div class="form-container">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Formulario de Registro</h2>
                    </div>
                    <div class="card-body">
                        <form action="insertar.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="nombre_completo">Nombre Completo</label>
                                <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="observacion">Observación</label>
                                <textarea class="form-control" id="observacion" name="observacion" rows="3" required></textarea>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="spacer"></div>
            <!--
            <div class="table-container">
                <h3 class="text-center">Datos Registrados</h3>
                <div class="text-center mt-3">  Centro el botón 
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
                        while($row = $result->fetch_assoc()) {
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
                        echo "<tr><td colspan='4' class='text-center'>No hay datos registrados</td></tr>";
                    }

                    // Cerrar la conexión con la base de datos una vez que se haya completado el procesamiento
                    $conn->close();
                    ?>
                    </tbody>
                </table>
            </div>
            -->
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="java.js"></script>
</body>
</html>