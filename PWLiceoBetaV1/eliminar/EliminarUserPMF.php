<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Eliminación de usuario</title>
    <script>
        $(function () {
            $("#Elim-User").dialog({
                resizable: false,
                height: 190,
                autoOpen: false,
                width: 330,
                modal: true,
                buttons: {
                    "Si": function () {
                        $('#ElimUser').submit();
                    },
                    No: function () {
                        $(this).dialog("close");
                    }
                }
            });

            $('#UserElimBoton').on('click', function (e) {
                $("#Elim-User").dialog('open');
            });
        });
    </script>
</head>

<body>
    <div id="Elim-User" title="Eliminar">
        <p>¿Seguro que desea egresar al usuario?</p>
    </div>
    <form id='ElimUser' ACTION='eliminar/EliminarInfoUserPMF.php' METHOD='post'>
        <?php	
			$con= mysql_connect('localhost','root','');
			mysql_set_charset('utf8', $con);
			mysql_select_db("bd_pmf",$con) or die("No se encuentra la base de datos"); ?>

            <table align='center' border='2'>
                <tr>
                    <td colspan='2' align='center'>Egresar usuario</td>
                </tr>

                <tr>
                    <td> Seleccione el usuario </td>
                    <td>
                        <select name='idusuario'>
                            <?php
		$result=mysql_query("SELECT * FROM usuarios");
		WHILE ($row=mysql_fetch_array($result)){ ?>

                                <?php echo "<option value=" . $row ["idusuario"] . ">" . $row ["usuario"] . "</option>"; ?>
                                    <?php } ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan='2' align='center'>
                        <input type='hidden' name='UserElimBoton' value='Eliminar' />
                        <input type='button' id='UserElimBoton' name='UserElimBoton' value='Eliminar'>
                    </td>
                </tr>
            </table>
    </form>
</body>

</html>