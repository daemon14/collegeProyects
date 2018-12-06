<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Registro de usuario</title>
    <script>
        $(function () {
            $("#Ingresar-User").dialog({
                resizable: false,
                height: 190,
                autoOpen: false,
                width: 330,
                modal: true,
                buttons: {
                    "Si": function () {
                        $('#InsUser').submit();
                    },
                    No: function () {
                        $(this).dialog("close");
                    }
                }
            });

            $('#UserIns').on('click', function (e) {
                $("#Ingresar-User").dialog('open');
            });
        });
    </script>
</head>

<body>
    <div id="Ingresar-User" title="Ingresar Usuario">
        <p>¿Está seguro que desea ingresar al Usuario?</p>
    </div>
		<form id='InsUser' ACTION= 'insertar/InsertarInfoUserPMF.php' METHOD='post'>
		<table align='center' border = '2'>
		
		<tr> <td colspan= '2' align='center'>Registro de Usuarios</td></tr>
		
		<tr><td> Nombre de usuario </td> <td>
		<input title='Sólo caracteres alfabéticos' type='text' name='usuario' pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ]+'>
		</td></tr>
		
		<tr><td> Contraseña </td> <td>
		<input title='Sólo caracteres alfanuméricos' type='text' name='pass' pattern='[0-9a-zA-ZáéíóúÁÉÍÓÚñÑüÜ]+' required/>
		</td></tr>
		
		<tr><td colspan='2' align='center'> <input type='hidden' name='UserIns' value='Ingresar Usuario' />
		<input type='button' id='UserIns' name='UserIns' value='Ingresar Usuario'></td></tr>
		</table></form>
</body>

</html>