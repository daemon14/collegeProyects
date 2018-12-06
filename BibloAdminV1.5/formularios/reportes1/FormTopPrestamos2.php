<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Reporte de préstamos por fecha</title>
</head>
<body>

	<?php	
		$con= mysql_connect('localhost','root','');
		mysql_set_charset('utf8', $con);
		mysql_select_db("bibliopmf",$con) or die("No se encuentra la base de datos"); ?>
	<form ACTION= 'RepTopPrestamos2.php' METHOD='post' class="form-control">
	<table align='center' border = '2'>
	
	<tr> <td colspan= '2' align='center'><b>Seleccionar fechas</b></td></tr>
	
	<tr><td> Desde </td> <td>
	<input name="PrestFecha1" id="PrestFecha1" type="date">
	</td></tr>
	
	<tr><td> Hasta </td> <td>
	<input name="PrestFecha2" id="PrestFecha2" type="date">
	</td></tr>
	
	<tr><td colspan='2' align='center'>	<input class="btn btn-primary" type='submit' value='Generar reporte'></td></tr>
	</table></form>;
</body>

</html>