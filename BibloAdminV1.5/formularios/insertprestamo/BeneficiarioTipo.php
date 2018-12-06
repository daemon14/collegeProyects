<?php

$conexion = mysqli_connect("localhost","root","","bibliopmf");

$el_benef = $_POST['Benef'];

$query = $conexion->query("SELECT * FROM beneficiario WHERE ID_Benef = $el_benef");

//echo '<option value="1">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['Tipo']. '">' . $row['Tipo'] . '</option>' . "\n";
}
