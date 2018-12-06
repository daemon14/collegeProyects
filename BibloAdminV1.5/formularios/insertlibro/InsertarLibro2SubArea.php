<?php

$conexion = mysqli_connect("localhost", "root", "", "bibliopmf");

$el_area = $_POST['Areas'];

$query = $conexion->query("SELECT * FROM subarea WHERE ID_Area = $el_area");

echo '<option value="1">Seleccione</option>';

while ($row = $query->fetch_assoc()) {
    echo '<option value="' . $row['ID_SubArea']. '">' . $row['Nombre_SubArea'] . '</option>' . "\n";
}
