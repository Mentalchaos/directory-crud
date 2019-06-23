<?php

    include ("conexion.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM producto WHERE id = $id";
        $result = mysqli_query($conexion,$query);

        if(!$result){
            die("Query failed");
        }

        $_SESSION['message'] = 'producto eliminado';
        $_SESSION['message_type'] = 'danger';
        header("location: product-create-form.php");
    }