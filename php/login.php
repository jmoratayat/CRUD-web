<?php  
require_once 'conexion.php';
/* obteniendo los valores de los campos*/
$usuario=$_POST["user"];
$clave=$_POST["psw"];
$consulta="SELECT * FROM usuario WHERE usern='$usuario' AND passw='$clave'";
$resultado=mysqli_query($conn,$consulta);
$filas=mysqli_num_rows($resultado);
if ($filas>0) {
header("location:../html/main.html");
} else {
    echo '<script>alert("Error en LOGIN")</script>';
}
?>