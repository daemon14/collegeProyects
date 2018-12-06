<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Registro de nuevo autor</title>
</head>
<body>

	<form ACTION= 'insertautor.php' METHOD='post'>
	<table align='center' border = '2'>
	
	<tr> <td colspan= '2' align='center'>Registro de autor</td></tr>
	
	<tr><td> Autor </td> <td>
	<input title='Sólo caracteres alfabéticos' type='text' name='Nombre_Autor' pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ ]+'>
	</td></tr>
	
	<tr><td colspan='2' align='center'>	<input type='submit' value='Ingresar'></td></tr>
	</table></form>;
</body>

</html>