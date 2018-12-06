<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Eliminación de profesor</title>
    <script>
        $(function () {
            $("#dialog-confirm2").dialog({
                resizable: false,
                height: 190,
                autoOpen: false,
                width: 330,
                modal: true,
                buttons: {
                    "Si": function () {
                        $('#ElimProf').submit();
                    },
                    No: function () {
                        $(this).dialog("close");
                    }
                }
            });

            $('#ProfElim').on('click', function (e) {
                $("#dialog-confirm2").dialog('open');
            });
        });
    </script>
</head>

<body>
    <div id="dialog-confirm2" title="Eliminar">
        <p>¿Seguro que desea egresar al profesor?</p>
    </div>
    <form id='ElimProf' ACTION='eliminar/EliminarInfoProfesorPMF.php' METHOD='post'>
        <?php	
			$con= mysql_connect('localhost','root','');
			mysql_set_charset('utf8', $con);
			mysql_select_db("bd_pmf",$con) or die("No se encuentra la base de datos"); ?>

            <table align='center' border='2'>
                <tr>
                    <td colspan='2' align='center'>Egresar profesor</td>
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
                        <input type='hidden' name='ProfElim' value='Eliminar' />
                        <input type='button' id='ProfElim' name='ProfElim' value='Eliminar'>
                    </td>
                </tr>
            </table>
    </form>
</body>

</html>