<head>
    <title>Ver datos</title>
    <script type="module" src="../components/bmenu.js"></script>
    <barra-menu></barra-menu>
</head>
<form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
    <div class="container">
        <p></p>
        <label for="codigo"><b>Codigo a buscar</b></label>
        <input type="number" placeholder="Ingrese el Codigo" name="codigo" required>
        <button type="submit" class="w3-button w3-black w3-padding-large w3-margin-bottom">Buscar</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
    </div>
</form>
<?php
require_once '../php/conexion.php';
$codigo = 0;
error_reporting(0);
$codigo = $_POST["codigo"];
if ($codigo > 0) {
    $sql = "SELECT * FROM parcial WHERE id='$codigo'";
} else {
    $sql = "SELECT * FROM parcial";
}

$result = mysqli_query($conn, $sql);
echo "
        <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        </style>
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