<div >
    <form action ="validacion-login.php" method="POST" class="form-container">
        <div class="form-group">
            <label for="exampleInputEmail1">E-Mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name= "mail" placeholder="Ingrese su email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder=" Ingrese su contraseña">
        </div>
        <div class="form-check">
        </div>
        <button type="submit" class="btn btn-primary login-button" value="iniciar-sesion" name ="iniciar-sesion">Iniciar Sesión</button>
        <label for="">¿aún no te has registrado?</label>
        <a href="user-create-form.php">crear cuenta</a>
    </form>
</div>