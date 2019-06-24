<?php

include ('conexion.php');

if(isset($_POST['iniciar-sesion'])){
    $contraseña = $_POST['password'];
    $correo = $_POST['mail'];
    
    if($correo ===""){
        header("location: index.php");
    }
    if($contraseña ===""){
            header("location: index.php");
    }
    
    $query = "SELECT * FROM usuario WHERE correo = '$correo'";
    $result= mysqli_query($conexion, $query);
    while($consulta = mysqli_fetch_array($result)){
         if($consulta['contrasena'] === $contraseña){
             header("location: product-create-form.php");
            }else{
            header("location: index.php");
         }
    }
}
?>

<!-- var_dump($_POST);  
     var_dump($conexion); -->