<?php
// Verifica si el formulario ha sido enviado
if(isset($_POST["btningresar"])) {
    // Verifica si los campos de usuario y contraseña están vacíos
    if(empty($_POST["Usuario"]) || empty($_POST["Contraseña"])) {
        // Muestra un mensaje de error si uno o ambos campos están vacíos
        echo '<div class="alert alert-danger">Por favor, complete todos los campos.</div>';
    } else {
        // Establece la conexión a la base de datos
        $conectar = new mysqli("localhost", "root", "", "comando");

        // Verifica si hay errores de conexión
        if ($conectar->connect_error) {
            die("Error en la conexión a la base de datos: " . $conectar->connect_error);
        }

        // Obtén los valores de usuario y contraseña del formulario
        $Usuario = $_POST["Usuario"];
        $Contrasenia = $_POST["Contraseña"];
        
        // Ejecuta una consulta SQL para buscar el usuario en la base de datos
        $sql = "SELECT * FROM usuarios WHERE Usuario='$Usuario' AND Contrasenia='$Contrasenia'";
        $resultado = $conectar->query($sql);
        
        // Verifica si se encontraron resultados
        if($resultado->num_rows > 0) {
            // Redirige al usuario a la página de inicio de sesión si las credenciales son correctas
            header("Location: index_Admin2.php");
            exit(); // Termina el script después de redirigir al usuario
        } else {
            // Muestra un mensaje de error si las credenciales son incorrectas
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
}
?>

