<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Actualización de usuario</title>
    <script>
        $(function () {
            $("#Update-User").dialog({
                resizable: false,
                height: 190,
                autoOpen: false,
                width: 330,
                modal: true,
                buttons: {
                    "Si": function () {
                        $('#UpdateUser').submit();
                    },
                    No: function () {
                        $(this).dialog("close");
                    }
                }
            });

            $('#UserUpdateBoton').on('click', function (e) {
                $("#Update-User").dialog('open');
            });
        });
    </script>
</head>

<body>
    <div id="Update-User" title="Actualizar">
        <p>¿Seguro que desea cambiar la contraseña?</p>
    </div>
    <form id='UpdateUser' ACTION='actualizar/ActualizarInfoUserPMF.php' METHOD='post'>
        <?php	
			$con= mysql_connect('localhost','root','');
			mysql_set_charset('utf8', $con);
			mysql_select_db("bd_pmf",$con) or die("No se encuentra la base de datos"); ?>

            <table align='center' border='2'>
                <tr>
                    <td colspan='2' align='center'>Cambiar contraseña</td>
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
                    <td> Nueva contraseña </td>
                    <td>
						<input title='Sólo caracteres alfanuméricos' type='text' name='pass' pattern='[0-9a-zA-ZáéíóúÁÉÍÓÚñÑüÜ]+' required/>
                    </td>
                </tr>

                <tr>
                    <td colspan='2' align='center'>
                        <input type='hidden' name='UserUpdateBoton' value='Actualizar' />
                        <input type='button' id='UserUpdateBoton' name='UserUpdateBoton' value='Actualizar'>
                    </td>
                </tr>
            </table>
    </form>
</body>

</html>