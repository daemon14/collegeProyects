<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Prestamo de libro</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="FuncionesPrestamo.js"></script>
</head>
<body>

	<center>

	<?php	
		$con= mysql_connect('localhost','root','');
		mysql_set_charset('utf8', $con);
		mysql_select_db("bibliopmf",$con) or die("No se encuentra la base de datos"); ?>
	<div class="form form-control form-group table-responsive" style="width:80%; height:500px">
	<form class="form form-control form-group table-responsive" style="width:80% heigth:40%" ACTION= 'ProcesarPrestamo.php' METHOD='post'>
	<table class="table table-striped table-bordered table-hover" align='center' border = '2'>
	
	<tr> <td colspan= '2' align='center'>Disponibilidad de libro</td></tr>
	
	<tr><td> Área </td> <td>
	<select style="width:100%;" name="ID_Area" id="ID_Area">
	<option value="1">Seleccione</option>
	</select>
	</td></tr>
	
	<tr><td> Subárea </td> <td>
	<select style="width:100%;" name="ID_SubArea" id="ID_SubArea">
	<option value="1">Seleccione</option>
	</select>
	</td></tr>
	
	<tr><td> Libro </td> <td>
	<select style="width:100%;" name="ID_Libro" id="ID_Libro">
	<option value="1">Seleccione</option>
	</select>
	</td></tr>
	
	<tr><td> Ejemplares disponibles </td> <td>
	<select style="width:100%;" name="CantDisponibles" id="CantDisponibles" disabled >
	</select>
	</td></tr>
	
	</table>
	
	<br>
	
	<table class="table table-striped table-bordered table-hover" align='center' border = '2'>
	
	<tr> <td colspan= '2' align='center'>Préstamo</td></tr>
	
	<tr><td> Beneficiario </td> <td>
	<select style="width:100%;" name="ID_Benef" id="ID_Benef">
	<option value="1">Seleccione</option>
	</select>
	</td></tr>
	
	<tr><td> Tipo </td> <td>
	<select style="width:100%;" name="Tipo" id="Tipo" disabled >
	</select>
	</td></tr>
	
	<tr><td> Año </td> <td>
	<select style="width:100%;" name="Grado">
	<option value="1">1</option>
	<option value="2">2</option> 
	<option value="3">3</option>
	<option value="4">4</option> 
	<option value="5">5</option>
	<option value="NA">NA</option>
	</select>
	</td></tr>
	
	<tr><td> Sección </td> <td>
	<select name="Seccion">
	<option value="A">A</option>
	<option value="B">B</option> 
	<option value="C">C</option>
	<option value="D">D</option> 
	<option value="E">E</option>
	<option value="F">F</option>
	<option value="NA">NA</option>
	</select>
	</td></tr>
	
	<tr><td> Fecha de devolución </td> <td>
	<input type='date' name='Fecha_Dev'/>
	</td></tr>
	
	<tr><td> Observación </td> <td>
	<textarea style="height:90px; width:100%;" type='text' name='Observacion' placeholder="Detalles del Libro"/></textarea>
	</td></tr>
	
	<tr><td colspan='2' align='center'>	
	<div class="alert alert-info"><strong>¡Atención!</strong> Verifique los Datos antes de guardar.</div>

              <input class="btn btn-primary" type='submit' value='Prestar Libro'></td></tr>
	</table></form>
	</div>
	</center>
</body>

</html>