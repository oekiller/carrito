<?php
include "cn.php";

$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$usuario= $_POST["usuario"];
$password= $_POST["password"];

$insertar= "INSERT INTO user(nombre,apellido,usuario,password) VALUES ('$nombre','$apellido','$usuario','$password')";

$verificar_user= mysqli_query($conexion, "SELECT * FROM user WHERE usuario = '$usuario'");
if(mysqli_num_rows($verificar_user)>0){
    echo '<script>
        alert("El usuario ya esta registrado");
        window.history.go(-1);
        </script>';
    exit;
}

$resultado= mysqli_query($conexion, $insertar);
if(!$resultado){
    echo '<script>
        alert("Error al registrarse");
        window.history.go(-1);
        </script>';
    exit;
}else{
    echo '<script>
        alert("Registro exitoso");
        window.location.href="http://localhost/carrito/login.html";
        </script>';
    
    exit;
}

mysqli_close($conexion);

?>