<?php
    require_once 'conexion.php';
/* obteniendo los valores de los campos*/
$campo1=$_POST["id"];
$campo2=$_POST["campo"];
$campo3=$_POST["nuevo"];
$sql = "UPDATE parcial SET $campo2 = '".$campo3."' WHERE id ='$campo1'";
if (mysqli_query($conn, $sql)) {
      echo '<script>alert("Actualizacion realizada")</script>';
      header("location:read.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>