<?php
    require_once 'conexion.php';
/* obteniendo los valores de los campos*/
$campo1=$_POST["nombre"];
$campo2=$_POST["grado"];
$campo3=$_POST["seccion"];
$campo4=$_POST["asignatura"];
$sql = "INSERT INTO parcial (nombre, grado, seccion, asignatura) VALUES ('".$campo1."','".$campo2."','".$campo3."','".$campo4."')";
if (mysqli_query($conn, $sql)) {
      echo '<script>alert("Record ingresado")</script>';
      header("location:read.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>