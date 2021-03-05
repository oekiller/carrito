<?php
include "cn.php";

$usuario=$_POST['usuario'];
$password=$_POST['password'];

$consulta="SELECT * FROM user WHERE usuario='$usuario' and password='$password'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location:http://localhost/carrito/carrito.html");
}
else{
    echo '<script>
        alert("Error al ingresar");
         window.history.go(-1);
        </script>';
    exit;
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>