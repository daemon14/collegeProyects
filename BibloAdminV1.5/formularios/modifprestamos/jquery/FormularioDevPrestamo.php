<?php

$ID_Benef = ($_POST['ID_Benef']);

?>
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Modificación de beneficiario</title>
</head>
<body>

	<?php
		$con= mysql_connect('localhost','root','');
		mysql_set_charset('utf8', $con);
		mysql_select_db("bibliopmf",$con) or die("No se encuentra la base de datos"); ?>

		<form>

		<table class="table table-responsive table-hover" align='center' border = '2' width="100%">

		<tr> <td colspan= '7' align='center'><b>Préstamos del beneficiario</b>
		<?php 	$result=mysql_query (" SELECT DISTINCT * FROM beneficiario WHERE ID_Benef = '$ID_Benef' ");
				WHILE ($row=mysql_fetch_array($result)){ ?>
		<?php echo $row ["Nombre_Benef"]; ?> <?php echo $row ["Apellido_Benef"]; ?>
		</td></tr>

		<?php } ?>
		<tr>
			<td><b>Título del libro</b></td>
			<td><b>Préstamo</b></td>
			<td><b>Devolución</b></td>
			<td><b>Año</b></td>
			<td><b>Sección</b></td>
			<td><b>Estado</b></td>
			<td><b>Observación</b></td>
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
		</tr>

		<?php } ?>

		</table>
	</form>
</body>

</html>
