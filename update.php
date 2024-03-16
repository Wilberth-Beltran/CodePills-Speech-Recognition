<?php
    require_once 'conexion.php'; // Conexion De La Base De Datos

    $id =$_POST['id'];
    $Coman =$_POST['Coman'];

    $query = mysqli_query($conectar, $sql);
    if ($query) {
        header("Location: /index2.php");
    }
?>

