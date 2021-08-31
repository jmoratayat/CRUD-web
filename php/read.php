<head>
    <title>Ver datos</title>
  <script type="module" src="../components/bmenu.js"></script>
    <barra-menu></barra-menu>
</head>

<?php
require_once '../php/conexion.php';
$sql = "SELECT * FROM parcial";
$result = mysqli_query($conn, $sql);
echo "
        <table id='example' class='table table-responsive table-striped table-bordered table-condensed table-hover'>
        <tr>
                <th>Codigo</th>
                <th>Nombres</th>
                <th>Grado</th>
                <th>Seccion</th>
                <th>Asignatura</th>
            </tr>";
while ($row = mysqli_fetch_array($result)) {
    echo "
            <tr>
                <td>" . $row[0] . "</td>
                <td>" . $row[1] . "</td>
                <td>" . $row[2] . "</td>
                <td>" . $row[3] . "</td>
                <td>" . $row[4] . "</td>
            </tr>";
}
echo "</table>";

?>