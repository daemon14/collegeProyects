<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Ejemplares disponibles de libro</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="FuncionesPrestamo.js"></script>
</head>
<body>

	<?php	
		$con= mysql_connect('localhost','root','');
		mysql_set_charset('utf8', $con);
		mysql_select_db("bibliopmf",$con) or die("No se encuentra la base de datos"); ?>

	<table align='center' border = '2'>
	
	<tr> <td colspan= '2' align='center'>Disponibilidad de libro</td></tr>
	
	<tr><td> Área </td> <td>
	<select name="ID_Area" id="ID_Area">
	<option value="1">Seleccione</option>
	</select>
	</td></tr>
	
	<tr><td> Subárea </td> <td>
	<select name="ID_SubArea" id="ID_SubArea">
	<option value="1">Seleccione</option>
	</select>
	</td></tr>
	
	<tr><td> Libro </td> <td>
	<select name="ID_Libro" id="ID_Libro">
	<option value="1">Seleccione</option>
	</select>
	</td></tr>
	
	<tr><td> Ejemplares disponibles </td> <td>
	<select name="CantDisponibles" id="CantDisponibles" disabled >
	</select>
	</td></tr>
	
	</table>;
</body>

</html>