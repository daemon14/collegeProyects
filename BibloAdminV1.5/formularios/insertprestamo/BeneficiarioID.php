<?php

$conexion = mysqli_connect("localhost","root","","bibliopmf");

$query = $conexion->query("SELECT * FROM beneficiario");

echo '<option value="1">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['ID_Benef']. '">' . $row['Nombre_Benef'] . ' ' . $row['Apellido_Benef'] . ' CI: ' . $row['ID_Benef'] . '</option>' . "\n";
}
