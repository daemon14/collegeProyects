<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Consulta de Secciones</title>
</head>
<?php
echo "<form ACTION= 'MostrarInfoPMF.php' METHOD='post'>
<table align='center' border = '2'>

<tr> <td colspan= '2' align='center'>Consultar Sección</td></tr>

<tr><td> Seleccione el año </td> <td><select name='ID_año'>
<option value=1>Primero</option> 
<option value=2>Segundo</option>
<option value=3>Tercero</option>
<option value=4>Cuarto</option>
<option value=5>Quinto</option>
</select></td></tr>

<tr><td> Seleccione la seccion </td> <td><select name='SECCION'>
<option value='A'>Seccion A</option> 
<option value='B'>Seccion B</option>
<option value='C'>Seccion C</option>
<option value='D'>Seccion D</option>
<option value='E'>Seccion E</option>
<option value='F'>Seccion F</option>
<option value='G'>Seccion G</option>
<option value='H'>Seccion H</option>
</select></td></tr>

<tr><td colspan='2' align='center'><input type='submit' value='Mostrar informacion'></td></tr>
</table></form>";
?>