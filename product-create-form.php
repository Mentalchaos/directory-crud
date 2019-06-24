
<!DOCTYPE html>
<?php include 'conexion.php'?>
<html lang="en">
    <?php include 'head.php' ?>
    <body class= "cuerpo">
        <!-- mensaje de alerta de exito de creacion de producto -->
        <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); }?>
            <br>
    <div class="container-all-product">
        <div class="container-product-form">
            <form action="save-product.php" method="POST">
                <div class="form-group">
                    <label >Nombre Producto</label>    
                    <input class="form-control" id="input-name" name="product-name" type="text" placeholder=" Ingrese el nombre">
                </div>
                <div class="form-group">
                    <label for="">Descripcion</label>
                    <textarea name= "description" class="product-text-area" rows="4" cols="39.9" placeholder=" Ingrese una Descripcion"></textarea>
                </div>    
                <div class="form-group">
                    <label >Precio</label>
                    <input name= "price" class="form-control" id="input-name" type="name" placeholder=" Ingrese el Precio">
                </div>  
                <div class="form-group">
                    <label >Cantidad</label>
                    <input name= "quantity" class="form-control" id="input-quantity" type="text" placeholder=" Ingrese la cantidad">
                </div>       
                <button class="btn btn-primary create-Product-button" value="save-product" name="save-product">Ingresar</button>
                <a href="conexion-close.php">cerrar sesion</a>
        </form>
    </div> 
        <div class= "col -md-8">
            <table class= "table table-bordered table-config">
                <thead>
                    <tr>
                        <th>Nombre</th> 
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Sub Total</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query ="SELECT * FROM producto";
                    $result_producto = mysqli_query($conexion,$query);
                    while($row = mysqli_fetch_array($result_producto)){?>
                        <tr>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['descripcion']?></td>
                            <td><?php echo $row['precio']?></td>
                            <td><?php echo $row['cantidad']?></td>
                            <!-- Sub Total -->
                            <td><?php echo $row['subtotal']?></td>
                            <td><a href="edit.php?id=<?php echo $row['id']?>">editar</a>
                                <a href="delete-product.php?id=<?php echo $row['id']?>">eliminar</a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>       
        </div>     
    </div>
                        <br>
            <div class="container-product-form" >
                <label for="">Total</label>
                <?php 
                
                $query = "SELECT * FROM producto";
                $result= mysqli_query($conexion, $query);
                $suma = 0;
                while($consulta = mysqli_fetch_array($result)){
                     $suma += $consulta['subtotal'];
                }

                ?>
                <label for="">
                    <?php echo $suma ?>
                </label>
            </div>
                
    
    <?php include 'scripts.php'?>
</body>            
</html>