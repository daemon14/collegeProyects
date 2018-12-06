<?php

$conexion = mysqli_connect("localhost","root","","bibliopmf");

$el_subarea = $_POST['SubAreas'];

$query = $conexion->query("SELECT * FROM libro WHERE ID_SubArea = $el_subarea");

echo '<option value="1">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['ID_Libro']. '">' . $row['Titulo'] . '</option>' . "\n";
}
