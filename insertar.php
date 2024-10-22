<?php
// Iniciar la sesión
session_start();

// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los valores enviados por el formulario
    $nombre_completo = $_POST['nombre_completo'];
    $direccion = $_POST['direccion'];
    $observacion = $_POST['observacion'];

    // Verificar que todos los campos estén completos
    if (!empty($nombre_completo) && !empty($direccion) && !empty($observacion)) {

        // Preparar la consulta SQL para insertar los datos en la tabla
        $sql = "INSERT INTO tabla (nombre_completo, direccion, observacion) VALUES (?, ?, ?)";

        // Preparar la sentencia SQL utilizando la conexión a la base de datos
        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Vincular los parámetros
            mysqli_stmt_bind_param($stmt, "sss", $nombre_completo, $direccion, $observacion);

            // Ejecutar la declaración preparada
            if (mysqli_stmt_execute($stmt)) {
                // Si la inserción es exitosa, establecer la variable de sesión
                $_SESSION['registrado'] = true; // Mueve esta línea aquí

                // Redirigir al usuario a la página ver_tabla.php
                echo '
                    <script>
                        alert("¡SUS DATOS HAN SIDO REGISTRADOS EXITOSAMENTE!");
                        window.location = "ver_tabla.php";
                    </script>
                ';
                exit(); // Detener la ejecución del script
            } else {
                // Mensaje de error
                echo '
                    <script>
                        alert("¡SUS DATOS NO SE PUDIERON REGISTRAR, INTENTA NUEVAMENTE!");
                        window.location = "index.php";
                    </script>
                ';
            }

            // Cerrar la declaración preparada
            mysqli_stmt_close($stmt);
        } else {
            echo "Error al preparar la declaración: " . mysqli_error($conn);
        }
    } else {
        // Mensaje de advertencia
        echo '
            <script>
                alert("Por favor, completa todos los campos.");
                window.location = "index.php";
            </script>
        ';
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
