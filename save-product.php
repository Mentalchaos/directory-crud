
<?php 
    include ('conexion.php');
    if(isset($_POST['save-product'])){
       $name = $_POST['product-name'];
       $description = $_POST['description'];
       $price =  $_POST['price'];
    //    echo $name;
    //    echo $description;
    //    echo $price;
        //insertar datos en al tabla 
        $query = "INSERT INTO directory(nombre, descripción, precio) 
                  VALUES ('$name', '$description', '$price')"; 

        //revisar la consulta "conexion" , "query"
        $result = mysqli_query($conexion, $query);
        if (!$result) {
            die("Query failed");
        }
        // echo 'saved';

        //guardar datos dentro de sesion en la pagina de conexiones (objeto)
        $_SESSION['message'] = 'producto creado con exito!';
        $_SESSION['message_type'] ="success";
        //redireccionar la pagina a la que tu quieras
        header("location: product-create-form.php");
    }
?>