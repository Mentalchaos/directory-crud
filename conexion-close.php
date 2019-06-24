<?php 
    include 'conexion.php';
    mysqli_close($conexion);
    header("location: index.php");
?>