<?php

$conexion = mysqli_connect("localhost","root","","bibliopmf");

$el_libro = $_POST['Libros'];

$query = $conexion->query("select a.ID_Libro, a.Titulo, a.Ejemplares, COALESCE(b.CantPrestados, 0) as CantPrestados, a.Ejemplares-COALESCE(b.CantPrestados, 0) CantDisponibles from libro a left join (select ID_Libro, count(*) CantPrestados from prestamo where estado='Ocupado' group by ID_Libro) b on a.ID_Libro=b.ID_Libro where a.ID_Libro = '$el_libro'");

//echo '<option value="' . $row['ID_Libro']. '">' . $row['CantDisponibles'] . '</option>' . "\n";
//echo '<option value="1">Seleccione</option>';
//
//
while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['ID_Libro']. '">' . $row['CantDisponibles'] . '</option>' . "\n";
	
	//echo  '<option value="' . $row['CantDisponibles'] . '">' "\n";
	
	//echo '<input type="text" name="CantDisponibles" value="' . $row['CantDisponibles'] . '" >'
	
	//echo '<output name="CantDisponibles" id="CantDisponibles"> </output>'
}
