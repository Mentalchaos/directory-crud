function validar (){
var nombre,rut,correo,pais,contraseña;
    nombre = document.getElementsByName("nombre").value;
    rut = document.getElementsByName("rut").value;
    correo = document.getElementsByName("correo").value;
    pais = document.getElementsByName("pais").value;
    contraseña = document.getElementsByName("contraseña").value;
    
    if(nombre ===""){
        alert("el campo nombre es obligatorio");
        return false;
    }
    else true;
}