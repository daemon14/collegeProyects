<?php

$ID_Libro = ($_POST['ID_Libro']);

?>
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Registro de nuevo libro</title>
	<script src="vendor/jquery/jquery.js"></script>
	<script src="FuncionesModifLibro.js"></script>
</head>
<body>
  <center>
	<?php
		$con= mysql_connect('localhost','root','');
		mysql_set_charset('utf8', $con);
		mysql_select_db("bibliopmf",$con) or die("No se encuentra la base de datos"); ?>

	<form class="form-control" ACTION= 'formularios/modiflibros/jquery/ModificarLibro.php' METHOD='post'>


	<?php 	$result=mysql_query (" SELECT Titulo FROM libro WHERE ID_Libro = '$ID_Libro' ");
			WHILE ($row=mysql_fetch_array($result)){ ?>

	<table align='center' border = '2'>

	<tr> <td colspan= '2' align='center'><b>Registro de libro</b></td></tr>

	<tr><td><b> ISBN </b></td> <td><label><?php echo $ID_Libro; ?></label>
	<input size="36" type="hidden" name="ID_Libro" value="<?php echo $ID_Libro; ?>">
	</td></tr>

	<tr><td><b> Título </b></td> <td>
	<input size="36" type="text" name="Titulo" value="<?php echo $row ["Titulo"]; ?>"/>
	</td></tr>

	<tr><td><b> Autor </b></td> <td>
        <select style="width:100%;" name='ID_Autor'>
            <?php
			$result=mysql_query("SELECT * FROM autor");
			WHILE ($row=mysql_fetch_array($result)){ ?>
            <?php echo "<option value=" . $row ["ID_Autor"] . ">" . $row ["Nombre_Autor"] . "</option>"; ?>
            <?php }} ?>
        </select>
	</td></tr>

	<tr><td><b> Área </b></td> <td>
	<select style="width:100%;" name="ID_Area" id="ID_Area">
	<option value="1">Seleccione</option>
	</select>
	</td></tr>

	<tr><td><b> Subárea </b></td> <td>
	<select style="width:100%;" name="ID_SubArea" id="ID_SubArea">
	<option value="1">Seleccione</option>
	</select>
	</td></tr>

	<?php 	$result=mysql_query (" SELECT Ejemplares FROM libro WHERE ID_Libro = '$ID_Libro' ");
			WHILE ($row=mysql_fetch_array($result)){ ?>

	<tr><td><b> Ejemplares </b></td> <td>
	<input size="36" type="text" name="Ejemplares" value="<?php echo $row ["Ejemplares"]; ?>"/>
	</td></tr>

	<?php } ?>

	<tr><td colspan='2' align='center'>	<input class="btn btn-success" type='submit' value='Guardar cambios'></td></tr>
	</table></form>
  </center>
</body>

</html>
