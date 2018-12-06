<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Consulta de Profesores</title>
</head>
<form ACTION='MostrarInfoPMF2.php' METHOD='post'>
    <?php	
			$con= mysql_connect('localhost','root','');
			mysql_set_charset('utf8', $con);
			mysql_select_db("bd_pmf",$con) or die("No se encuentra la base de datos"); ?>

        <table align='center' border='2'>
            <tr>
                <td colspan='2' align='center'>Consulta de los profesores</td>
            </tr>
            <tr>
                <td> Seleccione el profesor </td>
                <td>
                    <select name='ID_PROF'>
                        <?php
		$result=mysql_query("SELECT * FROM profesor");
		WHILE ($row=mysql_fetch_array($result)){ ?>

                            <?php echo "<option value=" . $row ["ID_PROF"] . ">" . $row ["NOMBRE"] . "</option>"; ?>
                                <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan='2' align='center'>
                    <input type='submit' value='Mostrar informacion'>
                </td>
            </tr>
        </table>