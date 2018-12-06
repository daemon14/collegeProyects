<html>

    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Insertar nueva noticia</title>
    </head>

    <body>
        <form id='noticia' ACTION='InsertarNoticiaPMF.php' METHOD='post'>
            <?php	
// $con= mysql_connect('localhost','root','');
// mysql_set_charset('utf8', $con);
// mysql_select_db("bd_pmf",$con) or die("No se encuentra la base de datos"); ?>

            <table align='center' border='2'>
                <tr>
                    <td colspan='2' align='center'>Insertar nueva noticia</td>
                </tr>
                <tr>
                    <td colspan='2' align='left'>Título</td>
                </tr>                

                <tr>
                    <td>
                        <input type='text' name='Titulo' size='66'>
                    </td>
                </tr>
                <tr>
                    <td colspan='2' align='left'>Contenido</td>
                </tr>
                <tr>
                    <td>
                        <textarea name='Contenido' cols='50' rows='12' size='20' id='contenido'></textarea>

                            </td>
                </tr>

                <tr>
                <tr>
                    <td colspan='2' align='left'>Añadir imagen</td>
                </tr>
                    <td>
                        <input type='file' name='NotImagen'>
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