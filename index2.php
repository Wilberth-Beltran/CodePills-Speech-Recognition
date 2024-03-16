<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link rel="stylesheet" href="css/css.css">
    <script src="https://kit.fontawesome.com/4abe0801d5.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="Crud">
<?php
        require "conexion.php";
        $todos_datos = "SELECT * FROM registro ORDER BY id ASC";
        $resultado = mysqli_query($conectar, $todos_datos);
    ?>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Comando de voz</th>
        </tr>
        </thead>
        <?php
                while($fila = mysqli_fetch_assoc($resultado)) {
            ?>
        <tbody>
        <tr>
            <td><?php echo $fila["id"]?></td>
            <td><?php echo $fila["Coman"]?></td>
        </tr>
        </tbody>
        <?php
                }
                mysqli_free_result($resultado);
            ?>
    </table>
    </section>
</body>
</html>