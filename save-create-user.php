<?php 

include ('conexion.php');

if(isset($_POST['crear-usuario'])){
    $nombre = $_POST['nombre'];
    $rut = $_POST['rut'];
    $pais = $_POST['pais'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $query = "INSERT INTO usuario(nombre,rut,pais,correo,contrasena) 
    VALUES ('$nombre','$rut','$pais','$correo','$contraseña')";

    $result = mysqli_query($conexion, $query);

    if (!$result){

    }

}


?>