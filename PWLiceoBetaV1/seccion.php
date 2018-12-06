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

    <! Librería JavaScript>
    <link type="text/css" href="jquery-ui/jquery-ui.css" rel="Stylesheet" />
    <script src="./jquery-ui/external/jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#accordion").accordion();
        });
    </script>

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
       <div id="content_inside_sidebar" style="top: 150px; height: 622px;">
          <h2><span style="color: #3B3B3B;"><b>Redes Sociales</b></span></h2>
          <ul>
            <li><b><a href="https://www.facebook.com/profile.php?id=100010486836673&amp;fref=ts"
                  title="Facebook" target="_blank"><span style="color: #D34911;">Facebook</span></a></b></li>
          </ul>
          <div style="text-align: right;">
            <ul>
              <li><b><a href="https://twitter.com/lbpedromfreites" title="Twitter"
                    target="_blank"><span style="color: #D34911;">Twitter</span></a></b></li>
            </ul>
          </div>
          <ul>
          </ul>
          <div style="text-align: right;"><i><b><a href="http://canaimaeducativo.gob.ve/"
                  title="Proyecto Canaima" target="_blank"><span style="color: #FE2E2E;"></span></a></b></i></div>
          <p style="text-align: right;"> </p>
          <div style="text-align: right;"><i><b><a href="http://canaimaeducativo.gob.ve/"
                  title="Proyecto Canaima" target="_blank"><span style="color: #D34911;"></span></a></b></i></div>
          <ul>
          </ul>
          <h2><span style="color: #3B3B3B;"><b>Enlaces de interés</b></span></h2>
          <ul>
            <li style="text-align: right;"><b><a href="http://canaimaeducativo.gob.ve/"
                  title="Proyecto Canaima" target="_blank"><span style="color: #D34911;">Canaima
                    Educativo</span></a></b></li>
          </ul>
          <div style="text-align: right;">
            <ul>
              <li><b><a href="http://www.me.gob.ve/" title="Página del Ministerio de Educación"
                    target="_blank"><span style="color: #D34911;">Ministerio de
                      Educación</span></a></b></li>
            </ul>
            <ul>
            </ul>
            <br />
            <h1 style="text-align: center;"><a href="#" class="active"><img src="image/008.png"
                  alt="Explorar" /></a></h1>
          </div>
          <ul>
            <li> <br />
            </li>
          </ul>
        </div>
            <div id="content_inside_main" style="height: 694px;">
                <div id="accordion">
                    <h3>Módulo de inserción de datos</h3>
                    <div>
                        <p>
                            <div style="text-align: center;"><img src="image/LogoMediano.png" alt="upt" /></div>
                        </p>
                        <p>
                            <h3 style="text-align: center;">Usted ha ingresado al Módulo de Consultas. <br>Por favor, seleccione una acción:</h3>
                        </p>
                    </div>
                    <h3>Secciones</h3>
                    <div>
                        <p>
                           <?php   
	                           include('consultas/seccion-sec.php');
	                       ?>
                        </p>
                    </div>
                    <h3>Profesores</h3>
                    <div>
                        <p>
                            <?php   
	include('consultas/seccion-prof.php');
	?>
                        </p>
                    </div>
                    <h3>Requisitos de Inscripción</h3>
                    <div>
                        <p>
                            <?php
	echo 	"<p><h3>Descargar Requisitos de Inscripción.<a href='consultas/ReqInsc.pdf'><img
				src='image/link.png' alt='link' align='absmiddle' style='width: 27px; height: 27px;' /></a></h3></p>";
//include ('RequisitosInscrip.htm');
?>
                        </p>
                        &nbsp; &nbsp; &nbsp;
                        <p>
                            <?php
//include ();
?>
                        </p>
                    </div>
                    <h3>Exámenes de Revisión y Materia Pendiente - Calendario Escolar</h3>
                    <div>
                        <p>
                            <?php
	echo 	"<p><h3>Revisión y Materia Pendiente: Información General.<a href='consultas/RevMatPendInfo.pdf'><img
				src='image/link.png' alt='link' align='absmiddle' style='width: 27px; height: 27px;' /></a></h3></p>
		    <p><h3>Descargar Horarios del III Momento de Materia Pendiente.<a href='consultas/MatPend3Mom.pdf'><img
				src='image/link.png' alt='link' align='absmiddle' style='width: 27px; height: 27px;' /></a></h3></p>
			<p><h3>Descargar Calendario Escolar 2016-2017.<a href='consultas/CalEscolar2016_2017.pdf'><img
				src='image/link.png' alt='link' align='absmiddle' style='width: 27px; height: 27px;' /></a></h3></p>";
//include ();
?>
                        </p>
                        &nbsp; &nbsp; &nbsp;
                        <p>
                            <?php
//include ();
?>
                        </p>
                    </div>
                </div>
                <div id="footer">
                    <div id="footer_inside">
                        <p>Copyright © <span style="color: #555555;">UPTJAA - Proyecto
            Socio-Tecnológico </span>2017 | Diseño <span style="color: #555555;">José
            Hernández - Luis Rodríguez</span>| Escrito en <span style="color: #555555;">CSS
            - XHTML - PHP<br />
          </span></p>
                    </div>
                </div>
</body>

</html>