<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Creación de nuevo beneficiario</title>
</head>
<body>

	<form ACTION= 'insertbeneficiario.php' METHOD='post'>
	<table align='center' border = '2'>
	
	<tr> <td colspan= '2' align='center'>Registro de beneficiario</td></tr>
	
	<tr><td> C.I. </td> <td>
	<input title='Incluir sólo números' type='text' name='ID_Benef' pattern='[0-9]+' required/>
	</td></tr>
	
	<tr><td> Apellido </td> <td>
	<input title='Sólo caracteres alfabéticos' type='text' name='Apellido_Benef' pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ ]+'>
	</td></tr>
	
	<tr><td> Nombre </td> <td>
	<input title='Sólo caracteres alfabéticos' type='text' name='Nombre_Benef' pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ ]+'>
	</td></tr>
	
	<tr><td> Sexo </td> <td>
	<select name="Sexo">
	<option value="M">Masculino</option> 
	<option value="F">Femenino</option>
	</select>
	</td></tr>
	
	<tr><td> Tipo </td> <td>
	<select name="Tipo">
	<option value="Estudiante">Estudiante</option> 
	<option value="Docente">Docente</option>
	<option value="Obrero">Obrero</option>
	<option value="Administrativo">Administrativo</option>
	</select>
	</td></tr>
	
	<tr><td colspan='2' align='center'>	<input class="btn btn-success" type='submit' value='Guardar'></td></tr>
	</table></form>
</body>

</html>