<?php include 'conexion.php'?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php' ?>
    <body class="body-container">
        <div class="container-user-form">
            <div class="create-user-form">
                <form class="" action ="save-create-user.php" method="POST">
                    <div class="form-group">
                        <label >Nombre</label>
                        <input class="form-control" id="input-name" type="name" name="nombre" placeholder=" Ingrese su nombre">
                    </div>
                    <div class="form-group">
                        <label >Rut</label>
                        <input class="form-control" id="input-rut" type="text" name ="rut" placeholder="12345678-9">
                    </div>
                    <div class="form-group">
                        <label >Correo</label>
                        <input class="form-control" id="input-email"type="text" name ="correo" placeholder="Directory@ejemplo.cl">
                    </div>
                    <div class="form-group">    
                        <label >Pais</label>
                        <input class="form-control" id="input-country"type="text" name ="pais" placeholder=" Ingrese su pais">
                    </div>
                    <div class="form-group">    
                        <label >Contraseña</label>
                        <input class="form-control" id="input-password"type="password" name ="contraseña" placeholder=" Ingrese su Contraseña">
                    </div>
                        <button type="submit" class="btn btn-primary login-button" name="crear-usuario">Crear Usuario</button>
                </form>
            </div>
        </div>
    </body>
</html>