<?php

$conexion = mysqli_connect("localhost", "root", "", "bibliopmf");

$query = $conexion->query("SELECT * FROM area");

echo '<option value="1">Seleccione</option>';

while ($row = $query->fetch_assoc()) {
    echo '<option value="' . $row['ID_Area']. '">' . $row['Nombre_Area'] . '</option>' . "\n";
}
