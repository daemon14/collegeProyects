<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
    <title>Liceo Bolivariano "Pedro María Freites"</title>
    <link rel="shortcut icon" href="image/LogoPeq.png" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <meta http-equiv="content-language" content="en-gb" />
    <meta http-equiv="imagetoolbar" content="false" />
    <meta name="author" content="Mauricio" />
    <meta name="copyright" content="Copyright (c) Christopher Robinson 2005 - 2007" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="last-modified" content="Sat, 01 Jan 2007 00:00:00 GMT" />
    <meta name="mssmarttagspreventparsing" content="true" />
    <meta name="robots" content="index, follow, noarchive" />
    <meta name="revisit-after" content="7 days" />
</head>

<body>
    <div id="header"><b> </b>
        <div id="header_inside"><b> </b>
            <h1 style="width: 540px;"><b> </b><span><b> Liceo Bolivariano</b>
            "Pedro María Freites" </span> <b>Puerto La Cruz</b> </h1>
            <ul>
                <li><a href="contact.xhtml">Contacto</a></li>
                <li><u><b><a href="seccion.php">Consultas</a></b></u></li>
                <li><a href="notice.php">Cartelera</a></li>
                <li><a href="index.xhtml">Inicio</a>
                    <br />
                </li>
                <li><a href="login.php">Ingresar</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div id="content_inside">
            <div id="content_inside_sidebar"> </div>
            <div id="content_inside_main">
                <h1>Información de las Secciones </h1>
                <p></p>
                <p></p>
                <p></p>
                <table>
                    <?php 	$con= mysql_connect('localhost','root','');
			mysql_set_charset('utf8', $con);
			mysql_select_db("bd_pmf",$con) or die("No se encuentra la base de datos");		?>
                        <table align='center' border="1" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td colspan="4" align='center'>

                                        <?php $SECCION = ($_POST['SECCION']);
				$ID_año = ($_POST['ID_año']);
		  
		  $idseccion=mysql_query ("SELECT DISTINCT año, SECCION FROM vista_general WHERE SECCION = '$SECCION' AND ID_año = '$ID_año'");
		   WHILE ($row=mysql_fetch_array($idseccion)){ ?>

                                            <big><b>Informacion de la sección <?php echo $row ["año"] . " " . $row ["SECCION"]; ?></b></big></td>

                                </tr>
                                <?php }
			?>
                                    <tr>
                                        <td><big>Nombre de la materia</big></td>
                                        <td><big>Nombre del profesor</big></td>
                                    </tr>
                                    <?php
		
		$ID_año = ($_POST['ID_año']);
		$SECCION = ($_POST['SECCION']);
		
		$result=mysql_query (" SELECT NOMBRE, MATERIA FROM vista_general WHERE ID_año = '$ID_año' AND SECCION = '$SECCION'");
			WHILE ($row=mysql_fetch_array($result)){ ?>
                                        <tr>
                                            <td>
                                                <?php echo $row ["MATERIA"]; ?>
                                                    <br>
                                            </td>
                                            <td>
                                                <?php echo $row ["NOMBRE"]; ?>
                                                    <br>
                                            </td>
                                        </tr>
                                        <?php }
		?>
                                            <tr>
                                                <td colspan="4">
                                                    <?php
			
			
		  
		$horarioseccion=mysql_query ("SELECT DISTINCT HORARIO FROM seccion WHERE ID_año = '$ID_año' AND SECCION = '$SECCION'");
		   WHILE ($row=mysql_fetch_array($horarioseccion)){ ?>

                                                        <A href="./<?php echo $row [" HORARIO "]; ?>">Ver horario</A</td>
		<?php }
		?>
</table>
		  <p></p>
        </div>
      </div>
    </div>
    <div id="footer">
      <div id="footer_inside">
        <p>Copyright © <span style="color: #555555;">UPTJAA - Poryecto
            Socio-Tecnológico </span>2017 | Diseño <span style="color: #555555;">José
            Hernández - Luis Rodríguez</span>| Escrito en <span style="color: #555555;">CSS
            - XHTML - PHP<br />
          </span></p>
      </div>
    </div>
  </body>
</html>