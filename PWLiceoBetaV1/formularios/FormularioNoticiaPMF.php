<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Insertar nueva noticia</title>
</head>

<body>
    <form ACTION='InsertarNoticiaPMF.php' METHOD='post'>
        <?php	
			$con= mysql_connect('localhost','root','');
			mysql_set_charset('utf8', $con);
			mysql_select_db("bd_pmf",$con) or die("No se encuentra la base de datos"); ?>

            <table align='center' border='2'>
                <tr>
                    <td colspan='2' align='center'>Insertar nueva noticia</td>
                </tr>

                <tr>
                    <td> Título de la noticia </td>
                    <td>
                        <input type='text' name='Título'>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> Contenido de la noticia </td>
                    <td>
                        <input type='text' name='Contenido' size='45'>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td> Seleccionar imagen </td>
                    <td>
                        <input type='file' name='NotImagen'>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan='2' align='center'>
                        <input type='submit' value='Enviar'>
                    </td>
                </tr>
            </table>
    </form>
</body>

</html>