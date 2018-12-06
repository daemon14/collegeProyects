<?php

$ID_Autor = ($_POST['ID_Autor']);

?>
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Modificar autor</title>
</head>
<body>
<center>

	<?php
		$con= mysql_connect('localhost','root','');
		mysql_set_charset('utf8', $con);
		mysql_select_db("bibliopmf",$con) or die("No se encuentra la base de datos"); ?>

	<form class="form-control" ACTION= 'formularios/modifautores/jquery/ModifAutor.php' METHOD='post'>
	<?php	$result=mysql_query("SELECT * FROM autor WHERE ID_Autor = '$ID_Autor'");
			WHILE ($row=mysql_fetch_array($result)){ ?>
	<table align='center' border = '2'>

	<tr> <td colspan= '2' align='center'><b>Modificar autor</b></td></tr>

		<tr><td><b> ID </b></td> <td><label><?php echo $ID_Autor; ?></label>
		<input type="hidden" name="ID_Autor" value="<?php echo $ID_Autor; ?>">
		</td></tr>

		<tr><td><b>Nombre </b></td> <td>
		<input type='text' name='Nombre_Autor' value="<?php echo $row ["Nombre_Autor"]; ?>"/>
		</td></tr>

		<?php } ?>

	<tr><td colspan='2' align='center'>	<input class="btn btn-success" type='submit' value='Guardar'></td></tr>
	</table></form>
</body>

</html>
