<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Verificar si se ha enviado un ID por GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Preparar la consulta SQL para eliminar el registro
    $sql = "DELETE FROM tabla WHERE id = ?";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {
            echo'
                    <script>
                        alert("¡REGISTRO ELIMINADO EXITOSAMENTE!");
                        window.location = "ver_tabla.php";
                    </script>
                ';
            exit();
        } else {
            echo'
                    <script>
                        alert("¡EL REGISTRO NO SE ELIMINO, INTENTE NUEVAMENTE!");
                        window.location = "ver_tabla.php";
                    </script>
                ';
        }

        mysqli_stmt_close($stmt);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
