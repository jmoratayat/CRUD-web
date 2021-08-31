<?php
$servername = "localhost";
$database = "htmldb";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
//validación de conexión
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}
echo("<script>console.log('DB Conection Success');</script>");
?>  