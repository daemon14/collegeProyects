<?php

$ID_Benef = ($_POST['ID_Benef']);

?>
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Modificación de beneficiario</title>
</head>
<body>
<center>
	<?php
		$con= mysql_connect('localhost','root','');
		mysql_set_charset('utf8', $con);
		mysql_select_db("bibliopmf",$con) or die("No se encuentra la base de datos"); ?>

	<form ACTION= 'formularios/devolverlibro/jquery/DevPrestamo.php' METHOD='post'>

	<table class="table table-condensed" style="width:100%;" align='center' border = '2'>

	<tr> <td colspan= '8' align='center'><b>Préstamos del beneficiario</b>
	<?php 	$result=mysql_query (" SELECT DISTINCT * FROM beneficiario WHERE ID_Benef = '$ID_Benef' ");
			WHILE ($row=mysql_fetch_array($result)){ ?>
	<?php echo $row ["Nombre_Benef"]; ?> <?php echo $row ["Apellido_Benef"]; ?>
	<input type="hidden" name="ID_Benef" value="<?php echo $ID_Benef; ?>">
	</td></tr>

	<?php } ?>
	<tr>
		<td><b>Titulo del libro</b></td>
		<td><b>Préstamo</b></td>
		<td><b>Devolución</b></td>
		<td><b>Año</b></td>
		<td><b>Seccion</b></td>
		<td><b>Estado</b></td>
    <td><b>Observación</b></td>
		<td><b>Seleccionar</b></td>
	</tr>

	<?php 	$result=mysql_query (" SELECT *	FROM libro, prestamo
			WHERE ID_Benef = '$ID_Benef'
			AND libro.ID_Libro = prestamo.ID_Libro
			AND Estado = 'Ocupado'
			ORDER BY ID_Prestamo ");
			WHILE ($row=mysql_fetch_array($result)){ ?>
	<tr>
		<td><?php echo $row ["Titulo"]; ?></td>
		<td><?php echo $row ["Fecha_Prest"]; ?></td>
		<td><?php echo $row ["Fecha_Dev"]; ?></td>
		<td><?php echo $row ["Grado"]; ?></td>
		<td><?php echo $row ["Seccion"]; ?></td>
		<td><?php echo $row ["Estado"]; ?></td>
    <td><?php echo $row ["Observacion"]; ?></td>
		<td><input type="checkbox" name="Devolver[]" value="<?php echo $row ['ID_Prestamo']; ?>"></td>
	</tr>

	<?php } ?>

	<tr><td colspan='8' align='center'>	<input class="btn btn-info" type='submit' value='Devolver libros seleccionados'></td></tr>
	</table></form>
</center>
</body>

</html>
