<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Desvinculación de profesor, materia y sección</title>
    <script>
        $(function () {
            $("#Elim-ProfMatSec").dialog({
                resizable: false,
                height: 190,
                autoOpen: false,
                width: 330,
                modal: true,
                buttons: {
                    "Si": function () {
                        $('#ElimProfMatSecID').submit();
                    },
                    No: function () {
                        $(this).dialog("close");
                    }
                }
            });

            $('#ElimProfMatSecBoton').on('click', function (e) {
                $("#Elim-ProfMatSec").dialog('open');
            });
        });
    </script>
</head>

<body>
    <div id="Elim-ProfMatSec" title="Desvincular Sección">
        <p>¿Seguro que desea desvincular la sección del profesor?</p>
    </div>
    <form id='ElimProfMatSecID' ACTION='eliminar/EliminarInfoProfMatSecPMF.php' METHOD='post'>
        <?php	
			$con= mysql_connect('localhost','root','');
			mysql_set_charset('utf8', $con);
			mysql_select_db("bd_pmf",$con) or die("No se encuentra la base de datos"); ?>

            <table align='center' border='2'>
                <tr>
                    <td colspan='2' align='center'>Desvinculación de profesor, materia y sección</td>
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
                    <td> Seleccione el ID de la materia </td>
                    <td>
                        <select name='ID_MAT'>
                            <option value='CL1'>CL1 Castellano y Literatura</option>
                            <option value='CL2'>CL2 Castellano y Literatura</option>
                            <option value='CL3'>CL3 Castellano y Literatura</option>
                            <option value='CL4'>CL4 Castellano y Literatura</option>
                            <option value='CL5'>CL5 Castellano y Literatura</option>
                            <option value='CB2'>CB2 Ciencias Biológicas</option>
                            <option value='CB3'>CB3 Ciencias Biológicas</option>
                            <option value='CB4'>CB4 Ciencias Biológicas</option>
                            <option value='CB5'>CB5 Ciencias Biológicas</option>
                            <option value='CT5'>CT5 Ciencias de la Tierra</option>
                            <option value='DI4'>DI4 Dibujo</option>
                            <option value='EC1'>EC1 Educación Familiar y Ciudadana</option>
                            <option value='EA1'>EA1 Educación Artística</option>
                            <option value='EA2'>EA2 Educación Artística</option>
                            <option value='EF1'>EF1 Educación Física y Deportes</option>
                            <option value='EF2'>EF2 Educación Física y Deportes</option>
                            <option value='EF3'>EF3 Educación Física y Deportes</option>
                            <option value='EF4'>EF4 Educación Física y Deportes</option>
                            <option value='EF5'>EF5 Educación Física y Deportes</option>
                            <option value='ET1'>ET1 Educación para el Trabajo</option>
                            <option value='ET2'>ET2 Educación para el Trabajo</option>
                            <option value='ET3'>ET3 Educación para el Trabajo</option>
                            <option value='ES2'>ES2 Educación para la Salud</option>
                            <option value='EN1'>EN1 Estudios de la Naturaleza</option>
                            <option value='PS4'>PS4 Psicología - Filosofía</option>
                            <option value='FI3'>FI3 Física</option>
                            <option value='FI4'>FI4 Física</option>
                            <option value='FI5'>FI5 Física</option>
                            <option value='GV3'>GV3 Geografía de Venezuela</option>
                            <option value='GV5'>GV5 Geografía de Venezuela</option>
                            <option value='GG1'>GG1 Geografía General</option>
                            <option value='HV1'>HV1 Historia de Venezuela</option>
                            <option value='HV2'>HV2 Historia de Venezuela</option>
                            <option value='HV3'>HV3 Historia de Venezuela</option>
                            <option value='HV4'>HV4 Historia de Venezuela</option>
                            <option value='HU2'>HU2 Historia Universal</option>
                            <option value='IN1'>IN1 Inglés</option>
                            <option value='IN2'>IN2 Inglés</option>
                            <option value='IN3'>IN3 Inglés</option>
                            <option value='IN4'>IN4 Inglés</option>
                            <option value='IN5'>IN5 Inglés</option>
                            <option value='IP4'>IP4 Instrucción Premilitar</option>
                            <option value='IP5'>IP5 Instrucción Premilitar</option>
                            <option value='MA1'>MA1 Matemática</option>
                            <option value='MA2'>MA2 Matemática</option>
                            <option value='MA3'>MA3 Matemática</option>
                            <option value='MA4'>MA4 Matemática</option>
                            <option value='MA5'>MA5 Matemática</option>
                            <option value='QU3'>QU3 Química</option>
                            <option value='QU4'>QU4 Química</option>
                            <option value='QU5'>QU5 Química</option>
                        </select>
                    </td>
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
                        <input type='hidden' name='ElimProfMatSecBoton' value='Desvincular Sección' />
                        <input type='button' id='ElimProfMatSecBoton' name='ElimProfMatSecBoton' value='Desvincular Sección'>
                    </td>
                </tr>
            </table>
    </form>
</body>

</html>