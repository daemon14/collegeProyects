<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Registro de nuevo libro</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="FuncionesLibro.js"></script>
</head>
<body>

	<?php	
        $con= mysql_connect('localhost', 'root', '');
        mysql_set_charset('utf8', $con);
        mysql_select_db("bibliopmf", $con) or die("No se encuentra la base de datos"); ?>

	<form ACTION= 'InsertarLibro2.php' METHOD='post'>
	<table align='center' border = '2'>
	
	<tr> <td colspan= '2' align='center'>Registro de libro</td></tr>
	
	<tr><td> ISBN </td> <td>
	<input type='text' name='ID_Libro' />
	</td></tr>
	
	<tr><td> Título </td> <td>
	<input type='text' name='Titulo' />
	</td></tr>
	
			<tr><td> Autor </td> <td>
                    <select name='ID_Autor'>
                          <?php
                        $result=mysql_query("SELECT * FROM autor");
                        while ($row=mysql_fetch_array($result)) {
                            ?>
    
                              <?php echo "<option value=" . $row ["ID_Autor"] . ">" . $row ["Nombre_Autor"] . "</option>"; ?>
                                  <?php
                        } ?>
                    </select>
			</td></tr>
	
	<tr><td> Área </td> <td>
	<select name="ID_Area" id="ID_Area">
	<option value="1">Seleccione</option>
	</select>
	</td></tr>
	
	<tr><td> Subárea </td> <td>
	<select name="ID_SubArea" id="ID_SubArea">
	<option value="1">Seleccione</option>
	</select>
	</td></tr>
	
	<tr><td> Ejemplares </td> <td>
	<input type='text' name='Ejemplares' />
	</td></tr>
	
	<tr><td colspan='2' align='center'>	<input type='submit' value='Ingresar'></td></tr>
	</table></form>;
</body>

</html>