function validar(){
    var nombre, apellido,usuario,password;
    
    nombre=document.getElementById("nombre").value;
    apellido=document.getElementById("apellido").value;
    usuario=document.getElementById("usuario").value;
    password=document.getElementById("password").value;
    
    if(nombre==="" || apellido==="" || usuario==="" || password===""){
        window.alert("Los campos estan vacios");
        return false;
    }
    else if(nombre.length>100 || apellido.length>100){
        window.alert("Solo puedes escribir 100 caracteres");
        return false;    
    }
    else if(usuario.length>20 || password.length>20){
        window.alert("Solo puedes escribir 20 caracteres");
        return false;    
    }
}