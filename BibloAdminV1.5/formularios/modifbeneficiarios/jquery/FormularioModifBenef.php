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

	<form ACTION= 'formularios/modifbeneficiarios/jquery/ModificarBenef.php' METHOD='post'>
	<?php 	$result=mysql_query (" SELECT * FROM beneficiario WHERE ID_Benef = '$ID_Benef' ");
			WHILE ($row=mysql_fetch_array($result)){ ?>
	<table align='center' border = '2'>

	<tr> <td colspan= '2' align='center'><b>Registro de beneficiario</b></td></tr>

	<tr><td><b> C.I. </b></td> <td><label><?php echo $ID_Benef; ?></label>
	<input type="hidden" name="ID_Benef" value="<?php echo $ID_Benef; ?>">
	</td></tr>

	<tr><td><b> Apellido </b></td> <td>
	<input title='Sólo caracteres alfabéticos' type='text' name='Apellido_Benef' pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ ]+'
	value="<?php echo $row ["Apellido_Benef"]; ?>">
	</td></tr>

	<tr><td><b> Nombre </b></td> <td>
	<input title='Sólo caracteres alfabéticos' type='text' name='Nombre_Benef' pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ ]+'
	value="<?php echo $row ["Nombre_Benef"]; ?>">
	</td></tr>

	<tr><td><b> Sexo </b></td> <td>
	<select name="Sexo">
	<option value="M">Masculino</option>
	<option value="F">Femenino</option>
	</select>
	</td></tr>

	<tr><td><b> Tipo </b></td> <td>
	<select name="Tipo">
	<option value="Estudiante">Estudiante</option>
	<option value="Docente">Docente</option>
	<option value="Obrero">Obrero</option>
	<option value="Administrativo">Administrativo</option>
	</select>
	</td></tr>

	<?php } ?>

	<tr><td colspan='2' align='center'>	<input class="btn btn-success" type='submit' value='Guardar'></td></tr>
	</table></form>
</body>

</html>
