<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
    <title>Liceo Bolivariano "Pedro María Freites"</title>
    <link rel="shortcut icon" href="image/LogoPeq.png" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <link type="text/css" href="jquery-ui/jquery-ui.css" rel="Stylesheet" />
    <script src="./jquery-ui/external/jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#accordion").accordion({
                heightStyle: "content"
            });
        });
    </script>
    <meta http-equiv="content-language" content="en-gb" />
    <meta name=“viewport” content=“width=device-width”>
    <meta http-equiv="imagetoolbar" content="false" />
    <meta name="author" content="Mauricio" />
    <meta name="copyright" content="Copyright (c) Christopher Robinson 2005 - 2007" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="last-modified" content="Sat, 01 Jan 2007 00:00:00 GMT" />
    <meta name="mssmarttagspreventparsing" content="true" />
    <meta name="robots" content="index, follow, noarchive" />
    <meta name="revisit-after" content="7 days" />

    <script type="text/javascript">
        function alerta() {
            alert('Los datos fueron ingresados correctamente!');
        }
    </script>
    <script>
        $(function () {
            $("#dialog-confirm").dialog({
                resizable: false,
                height: 190,
                autoOpen: false,
                width: 330,
                modal: true,
                buttons: {
                    "Si": function () {
                        $('#InsProf').submit();
                    },
                    No: function () {
                        $(this).dialog("close");
                    }
                }
            });

            $('#ProfIns').on('click', function (e) {
                $("#dialog-confirm").dialog('open');
            });
        });
    </script>

    <script>
        $(function () {
            $("#Ingresar-Seccion").dialog({
                resizable: false,
                height: 190,
                autoOpen: false,
                width: 330,
                modal: true,
                buttons: {
                    "Si": function () {
                        $('#InsSec').submit();
                    },
                    No: function () {
                        $(this).dialog("close");
                    }
                }
            });

            $('#SecIns').on('click', function (e) {
                $("#Ingresar-Seccion").dialog('open');
            });
        });
    </script>
</head>

<body>
    <div id="dialog-confirm" title="Ingresar">
        <p>¿Está seguro que desea ingresar al profesor?</p>
    </div>
    <div id="header"><b> </b>
        <div id="header_inside"><b> </b>
            <h1 style="width: 540px;"><b> </b><span><b> Liceo Bolivariano</b>
            "Pedro María Freites" </span> <b>Puerto La Cruz</b> </h1>
            <ul>
                <li><a href="contact.xhtml">Contacto</a></li>
                <li><a href="seccion.php">Consultas</a></li>
                <li><a href="notice.php">Cartelera</a></li>
                <li><a href="index.xhtml">Inicio</a>
                    <br />
                </li>
                <li><u><b><a href="login.php">Ingresar</a></b></u></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div id="content_inside">
            <div id="content_inside_sidebar"> </div>
            <div id="content_inside_main">
                <h1>Ingresar al Sitio</h1>
                <p></p>
                <?php
session_start();
include_once "conexion.php";

function verificar_login($user,$password,&$result) {
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'";
    $rec = mysql_query($sql);
    $count = 0;

    while($row = mysql_fetch_object($rec))
    {
        $count++;
        $result = $row;
    }

    if($count == 1)
    {
        return 1;
    }

    else
    {
        return 0;
    }
}

if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
        {
            $_SESSION['userid'] = $result->idusuario;
            header("location:login.php");
        }
        else
        {
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
        }
    }
?>

                    <style type="text/css">
                        * {}
                        
                        form.login {
                            background: none repeat scroll 0 0 #F1F1F1;
                            border: 1px solid #DDDDDD;
                            font-family: sans-serif;
                            margin: 0 auto;
                            padding: 20px;
                            width: 278px;
                        }
                        
                        form.login div {
                            margin-bottom: 15px;
                            overflow: hidden;
                        }
                        
                        form.login div label {
                            display: block;
                            float: left;
                            line-height: 25px;
                        }
                        
                        form.login div input[type="text"],
                        form.login div input[type="password"] {
                            border: 1px solid #DCDCDC;
                            float: right;
                            padding: 4px;
                        }
                        
                        form.login div input[type="submit"] {
                            background: none repeat scroll 0 0 #DEDEDE;
                            border: 1px solid #C6C6C6;
                            float: right;
                            font-weight: bold;
                            padding: 4px 20px;
                        }
                        
                        .error {
                            color: red;
                            font-weight: bold;
                            margin: 10px;
                            text-align: center;
                        }
                    </style>



                    <form action="" method="post" class="login">
                        <div>
                            <label>Usuario</label>
                            <input name="user" type="text">
                        </div>
                        <div>
                            <label>Contraseña</label>
                            <input name="password" type="password">
                        </div>
                        <div>
                            <input name="login" type="submit" value="Entrar">
                        </div>
                    </form>
                    <?php
} else {
	echo 'Su usuario ingreso correctamente.';
	echo '<a href="logout.php">Cerrar Sesión</a>';?>
                        <div id="accordion">
                            <h3>Módulo de inserción de datos</h3>
                            <div>
                                <p>
                                    <div style="text-align: center;"><img src="image/LogoMediano.png" alt="upt" /></div>
                                </p>
                                <p>
                                    <h3 style="text-align: center;">Usted ha ingresado al Módulo de Inserción de Datos. <br>Por favor, seleccione una acción:</h3>
                                </p>
                            </div>
                            <h3>Profesores</h3>
                            <div>
                                <p>
                                    <?php   
	echo  "<form id='InsProf' ACTION= 'insertar/InsertarInfoProfPMF.php' METHOD='post'>
<table align='center' border = '2'>

<tr> <td colspan= '2' align='center'>Registro de profesores</td></tr>

<tr><td> C.I. </td> <td>
<input title='Incluir sólo números' type='text' name='CI' pattern='[0-9]+' required/>
</td></tr>

<tr><td> Inserte el nombre del profesor </td> <td>
<input title='Sólo caracteres alfabéticos' type='text' name='NOMBRE' pattern='[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ ]+'>
</td></tr>

<tr><td colspan='2' align='center'> <input type='hidden' name='ProfIns' value='Ingresar' />
<input type='button' id='ProfIns' name='ProfIns' value='Ingresar'></td></tr>
</table></form>";
?>
                                </p>
                                &nbsp; &nbsp; &nbsp;
                                <p>
                                    <?php
   include ('eliminar/EliminarProfPMF.php');
   ?>
                                </p>
                            </div>
                            <h3>Secciones</h3>
                            <div>
                                <div id="Ingresar-Seccion" title="Ingresar Sección">
                                    <p>¿Está seguro que desea ingresar la Sección?</p>
                                </div>
                                <p>
                                    <?php
echo "<form id='InsSec' ACTION= 'insertar/InsertarInfoSecPMF.php' METHOD='post' enctype='multipart/form-data'>
<table align='center' border = '2'>

<tr> <td colspan= '2' align='center'>Insertar datos de la seccion</td></tr>



<tr><td> Seleccione el Año </td> <td><select name='ID_año'>
<option value=1>Primero</option> 
<option value=2>Segundo</option>
<option value=3>Tercero</option>
<option value=4>Cuarto</option>
<option value=5>Quinto</option>
</select></td></tr>

<tr><td> Seleccione la seccion </td> <td><select name='SECCION'>
<option value='A'>Seccion A</option> 
<option value='B'>Seccion B</option>
<option value='C'>Seccion C</option>
<option value='D'>Seccion D</option>
<option value='E'>Seccion E</option>
<option value='F'>Seccion F</option>
<option value='G'>Seccion G</option>
<option value='H'>Seccion H</option>
</select></td></tr>

<tr><td> Seleccione el horario </td> <td>
<input type='file' name='HORARIO'>
</select></td></tr>

<tr><td colspan='2' align='center'><input type='hidden' name='SecIns' value='Ingresar Sección' />
<input type='button' id='SecIns' name='SecIns' value='Ingresar Sección'></td></tr>
</table></form>";?>
                                </p>
                                &nbsp; &nbsp; &nbsp;
                                <p>
                                    <?php
	include ('eliminar/EliminarSecPMF.php');
	?>
                                </p>
                            </div>
                            <h3>Asignar Materias a Profesores</h3>
                            <div>
                                <p>
                                    <?php
include ('formularios/FormularioProfMatPMF.php');
?>
                                </p>
                                &nbsp; &nbsp; &nbsp;
                                <p>
                                    <?php
include ('eliminar/EliminarProfMatPMF.php');
?>
                                </p>
                            </div>
                            <h3>Asignar Secciones a Profesores</h3>
                            <div>
                                <p>
                                    <?php
include ('formularios/FormularioProfMatSecPMF.php');
?>
                                </p>
                                &nbsp; &nbsp; &nbsp;
                                <p>
                                    <?php
include ('eliminar/EliminarProfMatSecPMF.php');
?>
                                </p>
                            </div>
                            <h3>Reportes</h3>
                            <div>
                                <p>
                                    <?php
	echo 	"<p><h3>Generar reporte de todos los profesores.<a href='Rep_ProfTodos.php'><img
				src='image/link.png' alt='link' align='absmiddle' style='width: 27px; height: 27px;' /></a></h3></p>
			<p><h3>Generar reporte de profesores en aula.<a href='Rep_ProfAula.php'><img
				src='image/link.png' alt='link' align='absmiddle' style='width: 27px; height: 27px;' /></a></h3></p>
		    <p><h3>Generar reporte de Años (grados) que se imparten en el plantel.<a href='Rep_Anios.php'><img
				src='image/link.png' alt='link' align='absmiddle' style='width: 27px; height: 27px;' /></a></h3></p>
			<p><h3>Generar reporte de secciones del plantel.<a href='Rep_Secciones.php'><img
				src='image/link.png' alt='link' align='absmiddle' style='width: 27px; height: 27px;' /></a></h3></p>
			<p><h3>Generar reporte de materias que se imparten.<a href='Rep_Materias.php'><img
				src='image/link.png' alt='link' align='absmiddle' style='width: 27px; height: 27px;' /></a></h3></p>";
}
?>
                                </p>
                            </div>
                        </div>
                        <div id="footer">
                            <div id="footer_inside">
                                <p>Copyright © <span style="color: #555555;">UPTJAA - Poryecto
            Socio-Tecnológico </span>2017 | Diseño <span style="color: #555555;">José
            Hernández - Luis Rodríguez</span>| Escrito en <span style="color: #555555;">CSS
            - XHTML - PHP</span><span style="color: #555555;"></span>
                                    <a href="http://validator.w3.org/"></a>
                                </p>
                            </div>
                        </div>
</body>

</html>