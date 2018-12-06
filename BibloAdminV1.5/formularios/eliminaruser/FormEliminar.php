<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Eliminación de profesor</title>

</head>

<body>

    <form id='ElimProf' ACTION='eliminaruser.php' METHOD='post'>
        <?php	
			$con= mysql_connect('localhost','root','');
			mysql_set_charset('utf8', $con);
			mysql_select_db("bibliopmf",$con) or die("No se encuentra la base de datos"); ?>

            <table align='center' border='2'>
                <tr>
                    <td colspan='2' align='center'><b>Eliminar Usuarios Administradores del Sistema</b></td>
                </tr>

                <tr>
                    <td> Seleccione el Usuario que desea Eliminar </td>
                    <td>
                        <select name='ID_Usuario'>
                            <?php
		$result=mysql_query("SELECT * FROM usuario");
		WHILE ($row=mysql_fetch_array($result)){ ?>

                                <?php echo "<option value=" . $row ["ID_Usuario"] . ">" . $row ["email"] . "</option>"; ?>
                                    <?php } ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan='2' align='center'>
                        
                        <input type='submit' id='ProfElim' name='ProfElim' value='Eliminar'>
                    </td>
                </tr>
            </table>
    </form>
</body>

</html>