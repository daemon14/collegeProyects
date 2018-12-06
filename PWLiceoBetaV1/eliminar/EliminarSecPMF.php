<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Eliminación de sección</title>
    <script>
        $(function () {
            $("#Eliminar-Seccion").dialog({
                resizable: false,
                height: 190,
                autoOpen: false,
                width: 330,
                modal: true,
                buttons: {
                    "Si": function () {
                        $('#ElimSec').submit();
                    },
                    No: function () {
                        $(this).dialog("close");
                    }
                }
            });

            $('#SecElim').on('click', function (e) {
                $("#Eliminar-Seccion").dialog('open');
            });
        });
    </script>
</head>

<body>
    <div id="Eliminar-Seccion" title="Eliminar Sección">
        <p>¿Seguro que desea eliminar la sección?</p>
    </div>
    <form id='ElimSec' ACTION='eliminar/EliminarInfoSeccionPMF.php' METHOD='post'>
        <?php	
			$con= mysql_connect('localhost','root','');
			mysql_set_charset('utf8', $con);
			mysql_select_db("bd_pmf",$con) or die("No se encuentra la base de datos"); ?>

            <table align='center' border='2'>
                <tr>
                    <td colspan='2' align='center'>Eliminar sección</td>
                </tr>

                <tr>
                    <td> Seleccione el ID de la seccion </td>
                    <td>
                        <select name='ID_SEC'>
                            <?php
		$result=mysql_query("SELECT ID_SEC FROM seccion");
		WHILE ($row=mysql_fetch_array($result)){ ?>

                                <?php echo "<option value='" . $row ["ID_SEC"] . "'>Sección " . $row ["ID_SEC"] . "</option>"; ?>
                                    <?php } ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan='2' align='center'>
                        <input type='hidden' name='SecElim' value='Eliminar Sección' />
                        <input type='button' id='SecElim' name='SecElim' value='Eliminar Sección'>
                    </td>
                </tr>
            </table>
    </form>
</body>

</html>