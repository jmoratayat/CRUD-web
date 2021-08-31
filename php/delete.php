<?php
    require_once 'conexion.php';
/* obteniendo los valores de los campos*/
$campo1=$_POST["id"];
$sql = "DELETE FROM parcial WHERE id ='".$campo1."'";
if (mysqli_query($conn, $sql)) {
      echo '<script>alert("Record eliminado")</script>';
      header("location:read.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>