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

    $campos = array();

    if($nombre ==""){
        array_push($campos," el campo nombre no puede estar vacio");
    }
    if($contraseña =="" || strlen($contraseña) < 6){
        array_push($campos, "el campo contraseña no puede estar vacio ni tener menos de 6 caracteres");
    }  
    if($correo = "" || strpos($correo, "@") === false){
        array_push($campos,"ingresa un correo electronico valido");
    }
    if(count($campos) > 0){
        header("location: user-create-form.php");
        
    }
        <?php
            <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
        ?>
       
    if (!$result){
        die("asd");
    }
    header("location: index.php");
    
}


?>